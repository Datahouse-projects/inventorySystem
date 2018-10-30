@extends('layouts.app')
@section('header')
    <h1 >Items / home</h1>
@endsection
@section('content')
    <a id="add"  href="{{route('transfer.create')}}"><button class="btn btn-success">Add</button></a>
    <div id="table">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Total amount</th>
            </tr>
            @foreach($transfers as $transfer)
                <tr>
                    <td>{{$name[$transfer->product_variety_id][0]}}</td>
                    <td>{{$transfer->date}}</td>
                    <td>{{$transfer->quantity}}</td>
                    <td>{{$transfer->total_amount}}</td>

                </tr>
            @endforeach
        </table>
    </div>

@endsection
