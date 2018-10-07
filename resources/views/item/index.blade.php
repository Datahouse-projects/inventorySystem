@extends('layouts.app')
@section('header')
    <h1 >Items / home</h1>
@endsection
@section('content')
    <a id="add"  href="{{route('item.create')}}"><button class="btn btn-success">Add</button></a>
    <div id="table">
    <table class="table table-bordered">
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Brand</th>
            <th colspan="3">Actions</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->product_code}}</td>
                <td>{{$item->name}}</td>
                <td>{{$brands[$item->brand_id]}}</td>
                <td><a href="{{route('item.edit',$item->id)}}"><i class="fa fa-edit"></i> </a></td>
                <td><a href="deleteitem/{{$item->id}}"><i class="fa fa-trash"></i></a></td>
                <td><a href="{{route('item.show',$item->id)}}"><i class="fa fa-eye"></i> </a> </td>
            </tr>
        @endforeach
    </table>
    </div>

@endsection
