@extends('layouts.app')
@section('header')
    <h1 >Order / details</h1>
@endsection
@section('content')
    <div id="table">
    <table class="table table-bordered">
        <tr>
            <th >Item</th>
            <th>Quantity</th>
            <th>Unit measure</th>
            <th>Total amount</th>
            <th>Manufacture date</th>
            <th>Expire date</th>


        </tr>
        @foreach($orderlines as $orderline)
            <tr>
                <td>{{$name[$orderline->pivot->product_variety_id][0]}}</td>
                <td>{{$orderline->pivot->quantity}}</td>
                <td>{{$orderline->unit_measure.' '.$unit[$orderline->pivot->product_variety_id][0]}}</td>
                <td>{{$orderline->pivot->total_amount}}</td>
                <td>{{$orderline->pivot->manufacture_date}}</td>
                <td>{{$orderline->pivot->expire_date}}</td>


            </tr>
        @endforeach
    </table>
    </div>

@endsection
