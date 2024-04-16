<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_type;
use App\Models\Product_image;
use Illuminate\Support\Facades\DB;
use App\Rules\UniqueProduct;
use Illuminate\Support\Carbon;


class ProductController extends Controller
{
    public function index() {
        $products = DB::table('products')
                    ->join('product_types', 'products.id', '=', 'product_types.product_id')
                    ->select('products.*', DB::raw("SUM(product_types.inventory) AS inventory"))
                    ->groupBy('products.id','products.name', 'products.category', 'products.description', 'products.price', 'products.material', 'products.gender', 'products.created_at', 'products.updated_at', )
                    ->get();

        return view('admin.product.product', compact('products'));
    }

    public function add() {
        return view('admin.product.add');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:products',
            'material' => 'required',
            'category' => 'required',
            'gender' => 'required',
            'unitPrice' => 'required',
        ]);

        // $existingProduct = Product_type::where('color', $validated['color'])
        //                                 ->where('size', $validated['size'])
        //                                 ->whereHas('product', function ($query) use ($validated) {
        //                                     $query->where('name', $validated['name']);
        //                                 })->first();
        // if ($existingProduct) {
        //     $notification = [
        //         'type' => 'error',
        //         'message' => 'A product with the same name, color, and size already exists.',
        //     ];
        //     return redirect()->back()->with($notification);
        // }

        $product = Product::create([
            'name' => $validated['name'],
            'category' => $validated['category'],
            'price' => $validated['unitPrice'],
            'description' => $request->description,
            'material' => $validated['material'],
            'gender' => $validated['gender'],
        ]);

        $product_type = Product_type::create([
            'color' => "",
            'size' => "",
            'inventory' => 0,
            'sold' => 0,
            'product_id' => $product->id,
        ]);

        // if($request->file('image')) {
        //     foreach ($request->file('image') as $image) {
        //         $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        //         $image->move(public_path('image/product/'), $name_gen);
    
        //         $last_image = 'image/product/' . $name_gen;
    
        //         Product_image::create([
        //             'image' => $last_image,
        //             'product_type_id' => $product_type->id,
        //         ]);
        //     }
        // }

        $notification = [
            'type' => 'success',
            'message' =>  'Product Inserted Successfully',
        ];

        return redirect()->route('all.product')->with($notification);

    }

    public function edit($id) {
        $product = DB::table('products')
                    ->join('product_types', 'products.id', '=' ,'product_types.product_id')
                    ->where('products.id', $id)
                    ->first();

        $product_types = DB::table('product_types')
        // ->join('product_images', 'product_types.id', '=' ,'product_images.product_type_id')
        ->where('product_types.product_id', $id)
        ->get();

        $product_images = DB::table('product_types')
        ->join('product_images', 'product_types.id', '=' ,'product_images.product_type_id')
        ->where('product_types.product_id', $id)
        ->get();

        return view('admin.product.detail', compact('product', 'product_types', 'product_images'));
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required',
            'material' => 'required',
            'category' => 'required',
            'gender' => 'required',
            'unitPrice' => 'required',
        ]);

        DB::table('products')
        ->where('products.id', $id)
        ->update([
            'name' => $request->name,
            'description' => $request->description,
            'material' => $request->material,
            'category' => $request->category,
            'gender' => $request->gender,
            'price' => $request->unitPrice,
            'updated_at' => Carbon::now()
        ]);

        $notification = [
            'alert-type' => 'success',
            'message' =>  'Product Updated Successfully',
        ];



        return redirect()->back()->with($notification);
    }
    

    public function delete($id) {
        DB::table('products')->delete($id);

        $notification = [
            'alert-type' => 'success',
            'message' =>  'Product Deleted Successfully',
        ];

        return redirect()->back()->with($notification);
    }
}
