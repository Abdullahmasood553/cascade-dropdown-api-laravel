<?php

use App\http\Controllers\ProductController;
use App\http\Controllers\ProductSubCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('products', [ProductController::class, 'products']);
Route::get('product_sub_category', [ProductSubCategoryController::class, 'productSubCategory']);

