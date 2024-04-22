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
}
