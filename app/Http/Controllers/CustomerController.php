<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function get_customer()
    {
        $customers = Customer::all();
        $products = Product::take(5)->get();
        $customer_data = compact('customers', 'products');
        return view('create_order')->with($customer_data);
    }
    public function view_details(Request $request)
    {
        $id = $request->input('selectd_customer');
        $customers = Customer::Where('id', $id)->first();
        // $customer =compact('customers');
        return response()->json(['success' => true, 'customer' => $customers]);
    }
}
