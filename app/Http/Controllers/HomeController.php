<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = DB::table('products')
            ->select('category')
            ->distinct()
            ->get();

        $categoryData = [];

        foreach ($categories as $category) {
            $categoryProducts = DB::table('products')
                ->where('category', $category->category)
                ->get();

            $categoryProductData = [];

            foreach ($categoryProducts as $product) {
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

                $categoryProductData[] = [
                    'product' => $product,
                    'product_types' => $productTypeData,
                ];
            }

            $categoryData[] = [
                'category' => $category,
                'products' => $categoryProductData,
            ];
        }

        return view('home', compact('categoryData'));
    }
}
