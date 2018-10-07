@extends('layouts.app')
@section('header')
    <h1 >Products / home</h1>
@endsection
@section('content')
    <div id="table">
    <a id="add" href="{{route('product.create')}}"><button class="btn btn-success">Add</button></a>
    <table  class="table table-bordered">
        <tr>
            <th>Name</th>
            <th colspan="3">Actions</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td><a href="{{route('product.edit',$product->id)}}"><i class="fa fa-edit"></i> </a></td>
                <td><a href="deleteproduct/{{$product->id}}"><i class="fa fa-trash"></i></a></td>
                <td><a href="{{route('product.show',$product->id)}}"><i class="fa fa-eye"></i> </a> </td>
            </tr>
        @endforeach
    </table>
    </div>

@endsection
