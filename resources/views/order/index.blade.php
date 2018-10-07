@extends('layouts.app')
@section('header')
    <h1 >Order / Home</h1>
@endsection
@section('content')


    <a id="add"  href="{{route('order.create')}}"><button class="btn btn-success">Add</button></a>
    <div id="table">
    <table class="table table-bordered">
        <tr>
            <th>Code</th>
            <th>Delivery date</th>
            <th>Supplier</th>
            <th>Total amount</th>
            <th colspan="3">Actions</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->order_code}}</td>
                <td>{{$order->purchase_date}}</td>
                <td>{{$supplier[$order->supplier_id]}}</td>
                <td>{{$order->total_amount}}</td>
                <td><a href="{{route('order.edit',$order->id)}}"><i class="fa fa-edit"></i> </a></td>
                <td><a href="deleteorder/{{$order->id}}"><i class="fa fa-trash"></i></a></td>
                <td><a href="{{route('order.show',$order->id)}}"><i class="fa fa-eye"></i> </a> </td>
            </tr>
        @endforeach
    </table>
    </div>

@endsection
