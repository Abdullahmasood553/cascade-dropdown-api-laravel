<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSubCategory;

class ProductSubCategoryController extends Controller
{
    public function productSubCategory() {
        $product_sub_category = ProductSubCategory::all();
        if(!empty($product_sub_category)) {
            return response()->json([
                "product_sub_category" => $product_sub_category,
                "message" => "Product Subcategory Loaded Successfully",
                "status" => 200
            ]);
        } else {
            return response()->json(['message' => 'Product subcategory is not available']);
        }
    }
}
