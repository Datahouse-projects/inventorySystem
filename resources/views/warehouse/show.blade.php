@extends('layouts.app')
@section('header')
    <h1 >{{strtoupper($warehouse->name)}}</h1>
@endsection
@section('content')
    <a id="add"  href="{{route('warehouse.create')}}"><button class="btn btn-success">Add</button></a>
    <div id="table">
        <table class="table table-bordered">
            <tr>
                <th>Product name</th>
                <th>Unit measure</th>
                <th>Stock level</th>
                <th>Reorder level</th>
            </tr>
            @foreach($varieties as $variety)
                <tr>
                    <td>{{$name[$variety->pivot->product_variety_id][0]}}</td>
                    <td>{{$variety->unit_measure.' '.$unit[$variety->pivot->product_variety_id][0]}}</td>
                    <td>{{$variety->pivot->stock_level}}</td>
                    <td>{{$variety->pivot->reorder_level}}
                </tr>
            @endforeach
        </table>
    </div>

@endsection
