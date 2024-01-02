<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Customer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('order');
});

Route::get('/create_order', [CustomerController::class, 'get_customer']);
Route::post('/create_order', [CustomerController::class, 'view_details']);

// Route::get('/create_order/product', [ProductController::class, 'get_product']);
// Route::post('/create_order', [ProductController::class, 'product_details']);
