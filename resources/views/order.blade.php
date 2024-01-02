@extends('main')

@section('main-section')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a href="{{url('create_order')}}" class="btn">Create Order</a>
            </div>
        </div>
    </div>
</div>
@endsection
