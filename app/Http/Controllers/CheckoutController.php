<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Auth;
use Exception;
use Illuminate\Http\Request;
class CheckoutController extends Controller
{
    public function index() {
        $carts = DB::table('carts as c')
            ->join('cart_items as ci', 'ci.cart_id', '=','c.id')
            ->join('product_types as t', 'ci.product_type_id', '=', 't.id')
            ->join('products as p', 'p.id', '=', 't.product_id')
            ->select('ci.*', 'p.id as product_id', 'p.name', 'p.price', 't.id as type_id', 't.color', 't.size')
            ->where('c.user_id', Auth::user()->id)
            ->get();
    
        $order = DB::table('orders')
            ->where('user_id', Auth::user()->id)
            ->latest()
            ->limit(1)
            ->first();

        $images = [];
        foreach ($carts as $cart) {
            $image = DB::table('product_images as i')
                ->join('product_types as t', 'i.product_type_id', '=', 't.id')
                ->where('t.color', $cart->color)
                ->where('t.product_id', $cart->product_id)
                ->value('i.image');
            
            $images[] = $image;
        }
        foreach ($carts as $key => $cart) {
            $carts[$key]->image = $images[$key];
        }
    
        $totalPrice = 0;

        foreach ($carts as $cart) {

            $price = $cart->price;
            $amount = $cart->amount;

            $productTotalPrice = $price * $amount;

            $totalPrice += $productTotalPrice;
        }
        if($carts->isEmpty()) {

            $notification = [
                'alert-type' => 'alert',
                'message' =>  'Bạn không có sản phẩm nào trong giỏ hàng',
            ];
            
            return redirect()->back()->with($notification);
        } else {
            return view('cart.checkout', compact('carts', 'totalPrice', 'order'));
        }
    }

    public function vnpay_payment() {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/invoice";
        $vnp_TmnCode = "N2SBAUI4";
        $vnp_HashSecret = "RSEJKRIJTHJCTZHKILASIFNQTKFIRLSC";
        
        $vnp_TxnRef = $_POST['orderId']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán trực tuyến VNPAY';
        $vnp_OrderType = 'orderpayment';
        $vnp_Amount = $_POST['totalPrice'] * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = $_POST['bank_code'];
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        // $vnp_ExpireDate = $_POST['txtexpire'];
        //Billing

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );
        
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }
        
        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        
        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
            if (isset($_POST['redirect'])) {
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
    }

    public function invoice() {
        try {
            $vnp_TxnRef = $_GET['vnp_TxnRef'];
            $vnp_Amount = $_GET['vnp_Amount'] / 100;
            $vnp_ResponseCode = $_GET['vnp_ResponseCode'];
            $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
            $vnp_BankCode = $_GET['vnp_BankCode'];
            $vnp_PayDate = $_GET['vnp_PayDate'];

            if($vnp_ResponseCode == '00') {
                $existingInvoice = DB::table('invoices')
                    ->where('order_id', $vnp_TxnRef)
                    ->exists();

                if($existingInvoice) {

                    $notification = [
                        'alert-type' => 'error',
                        'message' => 'Đơn hàng đã tồn tại',
                    ];
    
                    return redirect('/')->with($notification);
                } else {
                    $invoice_status_id = 1;
                    $data = [
                        'payment_method' => 'vnp_banking',
                        'total_price' => $vnp_Amount,
                        'time' => Carbon::now(),
                        'created_at' => Carbon::now(),
                        'invoice_status_id' => $invoice_status_id,
                        'order_id' => $vnp_TxnRef,
                    ];
        
                    $invoiceId = DB::table('invoices')
                        ->insertGetId($data);

                    $cartId = DB::table('orders')
                        ->select('cart_id')
                        ->where('id', $data['order_id'])
                        ->first()->cart_id;

                    // dd($cartId);

                    DB::table('cart_items')
                        ->where('cart_id', $cartId)
                        ->delete();
                        
                    // dd($clearCartItems);

                    $data['invoice_id'] = $invoiceId;

                    $notification = [
                        'alert-type' => 'success',
                        'message' => 'Giao dịch thành công',
                    ];

                    return view('cart.invoice', compact('data'));
                }
            } else {
                $notification = [
                    'alert-type' => 'error',
                    'message' => 'Giao dịch không thành công'
                ];
    
                return view('cart.index');
            }
            
        } catch (Exception $e) {
            return redirect('/');
        }
    }
}
