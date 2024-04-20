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
        ->join('product_types as t', 'c.product_type_id', '=', 't.id')
        ->join('products as p', 'p.id', '=', 't.product_id')
        ->select('c.*', 'p.id as product_id', 'p.name', 'p.price', 't.id as type_id', 't.color', 't.size')
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

        $data = [
            'amount' => $validated['amount'],
            'note' => '',
            'user_id' => Auth::user()->id,
            'product_type_id' => $type_id,
            'created_at' => Carbon::now(),
        ];
        // dd($request->all(), $data);
        $ifExistData = DB::table('carts')
            ->where('user_id', Auth::user()->id)
            ->where('product_type_id', $type_id)
            ->first();

        if($ifExistData) {
            $newAmount = $ifExistData->amount + $validated['amount'];
            DB::table('carts')
                ->where('id', $ifExistData->id)
                ->update(
                    ['amount' => $newAmount]
                );
        } else {
            DB::table('carts')
                ->insert($data);
        }

        
        $notification = [
            'alert-type' => 'success',
            'message' =>  'Thêm vào giỏ hàng thành công',
        ];

        return redirect()->back()->with($notification);
    }

    public function delete($id) {
        DB::table('carts')
            ->where('user_id', Auth::user()->id)
            ->where('id', $id)
            ->delete();

        $notification = [
            'alert-type' => 'success',
            'message' =>  'Xoá khỏi giỏ hàng thành công',
        ];
    

        return redirect()->back()->with($notification);
    }
}
