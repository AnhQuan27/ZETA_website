<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Product;

class ProductTypeController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'color' => 'required',
            'size' => 'required',
            'weight' => 'required',
            'inventory' => 'required',
        ]);

        $data = [
            'color' => $validated['color'],
            'size' => $validated['size'],
            'weight' => $validated['weight'],
            'inventory' => $validated['inventory'],
            'sold' => 0,
            'created_at' => Carbon::now(), 
            'product_id' => $request->product_id,
        ];

        DB::table('product_types')
            ->insert($data);

        $product_type_id = DB::getPdo()->lastInsertId();  
        
        if($request->file('image')) {
            foreach ($request->file('image') as $image) {
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('image/product/'), $name_gen);
    
                $last_image = 'image/product/' . $name_gen;
                $data_image = [
                    'image' => $last_image,
                    'product_type_id' => $product_type_id,
                    'created_at' => Carbon::now(),
                ];
                DB::table('product_images')
                    ->insert($data_image);
            }
        } 
        
        $notification = [
            'type-alert' => 'success',
            'message' => 'Product type updated successfully',
        ];

        return redirect()->back()->with($notification);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'color' => 'required',
            'size' => 'required',
            'weight' => 'required',
            'inventory' => 'required',
        ]);


        // $existingProduct = DB::table('product_types')
        //                     ->where('color', $validated['color'])
        //                     ->where('size', $validated['size'])
        //                     ->join('products', 'product_types.product_id', '=', 'products.id')
        //                     ->where('products.id', $validated['name'])
        //                     ->first();
        // if ($existingProduct) {
        //     $notification = [
        //         'type' => 'error',
        //         'message' => 'A product with the same name, color, and size already exists.',
        //     ];
        //     return redirect()->back()->with($notification);
        // }
        
        $product_images = DB::table('product_types')
        ->join('product_images', 'product_types.id', '=' ,'product_images.product_type_id')
        ->where('product_types.id', $id)
        ->get();
        // dd($product_images);

        
        if($request->file('image')) {
            if($product_images->isNotEmpty()) {
                // dd($product_images);
                foreach ($product_images as $image) {
                    unlink($image->image);
                    DB::table('product_images')
                    ->where('image', $image->image)
                    ->delete();
                }
            }

            foreach ($request->file('image') as $image) {
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('image/product/'), $name_gen);
    
                $last_image = 'image/product/' . $name_gen;
                
                $data_image = [
                    'image' => $last_image,
                    'product_type_id' => $id,
                    'created_at' => Carbon::now(),
                ];

                DB::table('product_images')
                    ->insert($data_image);  
            }
        } 

        $data = [
            'color' => $request->color,
            'size' => $request->size,
            'weight' => $request->weight,
            'inventory' => $request->inventory,
            'created_at' => Carbon::now(), 
        ];

        DB::table('product_types')
            ->where('id', $id)
            ->update($data);

        $notification = [
            'type-alert' => 'success',
            'message' => 'Product type updated successfully',
        ];

        return redirect()->back()->with($notification);
    }
}
