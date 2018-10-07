@extends('layouts.app')
@section('header')
    <h1 >Products / items</h1>
@endsection
@section('content')
    <div id="table">
    <table class="table table-bordered">
        <tr>
            <th >Code</th>
            <th>Name</th>
            <th>Brand</th>

        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->product_code}}</td>
                <td>{{$product->name}}</td>
                <td>{{$brandArray[$product->brand_id]}}</td>


            </tr>
        @endforeach
    </table>
    </div>

@endsection
