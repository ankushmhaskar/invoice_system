@extends('main')

@section('main-section')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ url('create_order') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="customer_name" class="form-label">Customer Name: </label>
                    <select data-bs-toggle="dropdown" aria-expanded="false" name="customer_name" id="customer_name"
                        class="dropdown btn btn-secondary dropdown-toggle">
                        <option value="">--select customer name--</option>
                        <?php foreach ($customers as $customer) {
                            ?>
                        <option value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
                        <?php
                        } ?>
                    </select>
                    <div class="container" id="customerDetails">
                    </div>
                    <div class="my-3">
                        <label for="product_name" class="form-label">Product Name: </label>
                        <select data-bs-toggle="dropdown" aria-expanded="false" name="product_name" id="product_name"
                            class="dropdown btn btn-secondary dropdown-toggle">
                            <option value="">--select Product name--</option>
                            <?php foreach ($products as $product) {
                            ?>
                            <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                            <?php
                        } ?>
                        </select>
                        <div class="container" id="productDetails">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
