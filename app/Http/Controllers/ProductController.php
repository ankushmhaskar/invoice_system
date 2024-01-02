<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get_product(){

        $product = Product::all();
        $products = compact('product');
        return view('create_order');
    }
}
