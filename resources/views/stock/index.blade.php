@extends('layouts.app')
@section('header')
    <h1 >Reorder_level</h1>
@endsection
@section('content')
    <a id="add"  href="{{route('stock.create')}}"><button class="btn btn-success">Add</button></a>
    <div id="table">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Unit measure</th>
                <th>Reorder level</th>
                <th colspan="3">Action</th>
            </tr>
            @foreach($stocks as $stock)
                <tr>
                    <td>{{$name[$stock->id][0]}}</td>
                    <td>{{$measure[$stock->id][0].' '.$uom[$stock->id][0]}}</td>
                    <td>{{$stock->reorder_level}}</td>
                    <td><a href="{{route('stock.edit',$stock->id)}}"><i class="fa fa-edit"></i></a></td>

                </tr>
            @endforeach
        </table>
    </div>

@endsection
