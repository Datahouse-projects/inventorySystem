@extends('layouts.app')
@section('header')
    <h1 >Warehouse / home</h1>
@endsection
@section('content')
    <a id="add"  href="{{route('warehouse.create')}}"><button class="btn btn-success">Add</button></a>
    <div id="table">
        <table class="table table-bordered">
            <tr>

                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Location</th>
                <th>Telephone</th>
                <th colspan="3">Actions</th>
            </tr>
            @foreach($warehouses as $warehouse)
                <tr>
                    <td>{{$warehouse->name}}</td>
                    <td>{{$warehouse->address}}</td>
                    <td>{{$warehouse->email}}</td>
                    <td>{{$warehouse->location}}</td>
                    <td>{{$warehouse->telephone}}</td>
                    <td><a href="{{route('warehouse.edit',$warehouse->id)}}"><i class="fa fa-edit"></i> </a></td>
                    <td><a href="deletewarehouse/{{$warehouse->id}}"><i class="fa fa-trash"></i></a></td>
                    <td><a href="{{route('warehouse.show',$warehouse->id)}}"><i class="fa fa-eye"></i> </a> </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
