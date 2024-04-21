<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index() {
        $carts = DB::table('carts as c')
        ->join('cart_items as ci', 'ci.cart_id', '=','c.id')
        ->join('product_types as t', 'ci.product_type_id', '=', 't.id')
        ->join('products as p', 'p.id', '=', 't.product_id')
        ->select('ci.*','p.id as product_id', 'p.name', 'p.price', 't.id as type_id', 't.color', 't.size')
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
        // dd($carts);
        foreach ($carts as $cart) {

            $price = $cart->price;
            $amount = $cart->amount;

            $productTotalPrice = $price * $amount;

            $totalPrice += $productTotalPrice;
        }

        return view('cart.index', compact('carts', 'totalPrice'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'productID' => 'required',
            'color' => 'required',
            'size' => 'required',
            'amount' => 'required'
        ]);

        $type_id = DB::table('product_types')
            ->where('product_id', $validated['productID'])
            ->where('color', $validated['color'])
            ->where('size', $validated['size'])
            ->value('id');

        $cart_id = DB::table('carts')
            ->where('user_id', Auth::user()->id)
            ->value('id');

        if($cart_id == null) {
            DB::table('carts')->insert([
                'user_id' => Auth::user()->id,
                'created_at' => Carbon::now()
            ]);

            $cart_id = DB::table('carts')
                ->where('user_id', Auth::user()->id)
                ->value('id');
        }

        $data = [
            'amount' => $validated['amount'],
            'note' => '',
            // 'user_id' => Auth::user()->id,
            'cart_id' => $cart_id,
            'product_type_id' => $type_id,
            'created_at' => Carbon::now(),
        ];

        // dd($request->all(), $data);

        $ifExistData = DB::table('carts as c')
            ->join('cart_items as ci', 'ci.cart_id', '=', 'c.id')
            ->where('c.user_id', Auth::user()->id)
            ->where('ci.product_type_id', $type_id)
            ->first();
        

        if($ifExistData) {
            $newAmount = $ifExistData->amount + $validated['amount'];
            DB::table('cart_items')
                ->where('id', $ifExistData->id)
                ->update(
                    ['amount' => $newAmount]
                );
        } else {
            DB::table('cart_items')
                ->insert($data);
        }

        $previousUrl = url()->previous();

        $notification = [
            'alert-type' => 'success',
            'message' =>  'Thêm vào giỏ hàng thành công',
        ];

        return redirect()->back()->with($notification);
    }

    public function delete($id) {
        $cart_id = DB::table('carts')
            ->where('user_id', Auth::user()->id)
            ->value('id');

        DB::table('cart_items')
            ->where('cart_id', $cart_id)
            ->where('id', $id)
            ->delete();

        $notification = [
            'alert-type' => 'success',
            'message' =>  'Xoá khỏi giỏ hàng thành công',
        ];

        return redirect()->back()->with($notification);
    }
}
