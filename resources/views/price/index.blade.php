@extends('layouts.app')
@section('header')
    <h1 >Prices</h1>
@endsection
@section('content')
    <a id="add"  href="{{route('batch.create')}}"><button class="btn btn-success">Add</button></a>
    <div id="table">
        <table class="table table-bordered">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Unit measure</th>
                <th>Purchase cost</th>
                <th>Selling price</th>
                <th>From date</th>
                <th>To date</th>
                <th>Edit</th>


            </tr>
            @foreach($batches as $batch)
                <tr>
                    <td>{{$batch->batch_code}}</td>
                    <td>{{$name[$batch->product_variety_id][0]}}</td>
                    <td>{{$measure[$batch->product_variety_id].' '.$uom[$batch->product_variety_id][0]}}</td>
                    <td>{{$batch->unit_cost}}</td>
                    <td>{{$price[$batch->id][0]}}</td>
                    <td>{{$fromdate[$batch->id][0]}}</td>
                    <td>{{$todate[$batch->product_variety_id][0]}}</td>
                    <td><a href="{{route('price.edit',$id[$batch->id][0])}}"><i class="fa fa-edit"></i> </a></td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
