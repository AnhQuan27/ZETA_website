<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{

    public function index() {
        $carts = DB::table('carts as c')
            ->join('cart_items as ci', 'ci.cart_id', '=','c.id')
            ->join('product_types as t', 'ci.product_type_id', '=', 't.id')
            ->join('products as p', 'p.id', '=', 't.product_id')
            ->select('ci.*', 'p.id as product_id', 'p.name', 'p.price', 't.id as type_id', 't.color', 't.size')
            ->where('c.user_id', Auth::user()->id)
            ->get();
    
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
            return view('cart.order', compact('carts', 'totalPrice'));
        }
    }

    public function store(Request $request) {
        $data = [
            'note' => $request->note,
            'user_id' => Auth::user()->id,
            'total_price' => $request->totalPrice,
            'cart_id' => $request->cartId,
            'created_at' => Carbon::now(),
        ];
        // if()
        // dd($data);
        $order = DB::table('orders')
            ->insert($data);

        // $cart_item = DB::table('cart_items')
        //     ->where('cart_id', $request->cartId)
        //     ->delete();

        $notification = [
            'alert-type' => 'success',
            'message' =>  'Tạo đơn hàng thành công',
        ];
        
        return redirect('/checkout')->with($notification);
    }

    public function all() {
        $orders = DB::table('orders as o')
            ->join('users as u', 'o.user_id', '=','u.id')
            ->join('invoices as i', 'i.order_id', '=', 'o.id')
            ->join('invoice_statuses as is', 'i.invoice_status_id', '=', 'is.id')
            ->select('o.*','u.id as user_id', 'u.name as user_name', 'u.email as user_email', 'u.phone as user_phone', 'u.avatar as user_avatar', 'is.status as invoice_status')
            ->get();
        
        // dd($orders);
        return view('admin.order.index', compact('orders'));
    }

    public function edit($id) {
        $order = DB::table('orders as o')
            ->join('users as u', 'o.user_id', '=','u.id')
            ->join('invoices as i', 'i.order_id', '=', 'o.id')
            ->select('o.*','u.id as user_id', 'u.name as user_name', 'u.email as user_email', 'u.phone as user_phone', 'u.avatar as user_avatar', 'i.id as invoice_id')
            ->where('o.id', $id)
            ->first();
        return view('admin.order.detail', compact('order'));
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'total_price' => 'required|numeric',
            'created_at' => 'required',
        ]);

        $data = [
            'total_price' => $validated['total_price'],
            'created_at' => $validated['created_at'],
            'note' => $request->note,
            'updated_at' => Carbon::now(),
        ];

        DB::table('orders')
            ->where('id', $id)
            ->update($data);

        $notification = [
            'alert-type' => 'success',
            'message' =>  'Order updated successfully',
        ];

        return redirect()->back()->with($notification);
    }

    public function delete($id) {
        DB::table('orders')
            ->where('id', $id)
            ->delete($id);

        $notification = [
            'alert-type' => 'success',
            'message' =>  'Order deleted successfully',
        ];

        return redirect()->back()->with($notification);
    }
}
