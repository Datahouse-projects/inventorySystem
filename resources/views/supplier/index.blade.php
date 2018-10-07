@extends('layouts.app')
@section('header')
    <h1 >Supplier / Home</h1>
@endsection
@section('content')
    <div id="table">
    <a id="add" href="{{route('supplier.create')}}"><button class="btn btn-success">Add</button></a>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Telephone</th>
            <th colspan="3">Actions</th>
        </tr>
        @foreach($suppliers as $supplier)
            <tr>
                <td>{{$supplier->name}}</td>
                <td>{{$supplier->address}}</td>
                <td>{{$supplier->telephone}}</td>
                <td><a href="{{route('supplier.edit',$supplier->id)}}"><i class="fa fa-edit"></i> </a></td>
                <td><a href="deletesupplier/{{$supplier->id}}"><i class="fa fa-trash"></i></a></td>
                <td><a href=""><i class="fa fa-eye"></i> </a> </td>
            </tr>
        @endforeach
    </table>
    </div>

@endsection