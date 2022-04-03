<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products() {
        // $products = Product::select('id', 'product_name')->get();
        $products = Product::all();
        if(!empty($products)) {
            return response()->json(
                ["products" => $products,
                  "message" => "Products Loaded Successfully",
                  "status" => 200   
                ]
             );
        } else {
            return response()->json(['message' => 'Product is not available']);
        }
    }
}
