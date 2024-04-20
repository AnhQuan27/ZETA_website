<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class HomeProductController extends Controller
{
    public function index()
    {

        $products = DB::table('products')
            ->get();

        $productData = [];

        foreach ($products as $product) {
            $productTypes = DB::table('product_types')
                ->where('product_id', $product->id)
                ->get();

            $productTypeData = [];

            foreach ($productTypes as $productType) {
                $productImages = DB::table('product_images')
                    ->where('product_type_id', $productType->id)
                    ->latest()
                    ->get();

                $productTypeData[] = [
                    'product_type' => $productType,
                    'product_images' => $productImages,
                ];
            }

            $productData[] = [
                'product' => $product,
                'product_types' => $productTypeData,
            ];
        }

        return view('product.index', compact('productData'));
    }

    public function showByCategory($category)
    {
        $products = DB::table('products')
            ->where('category', $category)
            ->get();

        $productData = [];

        foreach ($products as $product) {
            $productTypes = DB::table('product_types')
                ->where('product_id', $product->id)
                ->get();

            $productTypeData = [];

            foreach ($productTypes as $productType) {
                $productImages = DB::table('product_images')
                    ->where('product_type_id', $productType->id)
                    ->latest()
                    ->get();

                $productTypeData[] = [
                    'product_type' => $productType,
                    'product_images' => $productImages,
                ];
            }

            $productData[] = [
                'product' => $product,
                'product_types' => $productTypeData,
            ];
        }

        return view('product.index', compact('productData'));
    }

    public function detail($id)
    {
        $product = DB::table('products')
            ->where('id', $id)
            ->first();
    
        $productTypes = DB::table('product_types')
            ->where('product_id', $id)
            ->get();
    
        $productTypeData = [];
    
        foreach ($productTypes as $productType) {
            $productImages = DB::table('product_images')
                ->where('product_type_id', $productType->id)
                ->latest()
                ->get();
    
            $productTypeData[] = [
                'product_type' => $productType,
                'product_images' => $productImages,
            ];
        }
    
        $productData = [
            'product' => $product,
            'product_types' => $productTypeData,
        ];
    
        $sizes = DB::table('product_types')
            ->select('size')
            ->distinct()
            ->where('product_id', $id)
            ->get();
    
        $inventory = DB::table('product_types')
            ->select('inventory')
            ->where('product_id', $id)
            ->first();

        $productsByCategory = DB::table('products')
        ->where('category', $product->category)
        ->get();
    
        $productDataByCategory = [];
        
        foreach ($productsByCategory as $productByCategory) {
            $productTypesByCategory = DB::table('product_types')
                ->where('product_id', $productByCategory->id)
                ->get();
        
            $productTypeDataByCategory = [];
        
            foreach ($productTypesByCategory as $productTypeByCategory) {
                $productImagesByCategory = DB::table('product_images')
                    ->where('product_type_id', $productTypeByCategory->id)
                    ->get();
        
                $productTypeDataByCategory[] = [
                    'product_type' => $productTypeByCategory,
                    'product_images' => $productImagesByCategory,
                ];
            }
        
            $productDataByCategory[] = [
                'product' => $productByCategory,
                'product_types' => $productTypeDataByCategory,
            ];
        }
        
        return view('product.detail', compact('productData', 'sizes', 'inventory', 'productDataByCategory'));
    }
    

}


