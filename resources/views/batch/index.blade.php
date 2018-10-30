@extends('layouts.app')
@section('header')
    <h1 >Batches / home</h1>
@endsection
@section('content')
    <a id="add"  href="{{route('batch.create')}}"><button class="btn btn-success">Add</button></a>
    <div id="table">
        <table class="table table-bordered">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Unit measure</th>
                <th>Initial stock</th>
                <th>Stock level</th>
                <th>Manufacture date</th>
                <th>Expire date</th>
                <th>Purchase cost</th>
                <th>Selling price</th>

            </tr>
            @foreach($batches as $batch)
                <tr>
                    <td>{{$batch->batch_code}}</td>
                    <td>{{$name[$batch->product_variety_id][0]}}</td>
                    <td>{{$measure[$batch->product_variety_id].' '.$uom[$batch->product_variety_id][0]}}</td>
                    <td>{{$batch->initial_stock}}</td>
                    <td>{{$batch->stock_level}}</td>
                    <td>{{$batch->manufacture_date}}</td>
                    <td>{{$batch->expire_date}}</td>
                    <td>{{$batch->unit_cost}}</td>
                    <td>{{$price[$batch->id][0]}}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
