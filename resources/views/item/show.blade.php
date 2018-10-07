@extends('layouts.app')
@section('header')
    <h1> Item / Varieties</h1>
@endsection
@section('content')
    <div id="table">
    <table class="table table-bordered">
        <tr>
            <th >Package material</th>
            <th>Quantity</th>
            <th>Unit price</th>
           <th>Stock level</th>
            <th>Reorder level</th>


        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->package_material}}</td>
                <td>{{$item->unit_measure.' '.$product->default_uom}}</td>
                <td>{{$item->unit_price}}</td>
                <td>{{$stock[$item->id]}}</td>
                <td>{{$reorder[$item->id]}}</td>


            </tr>
        @endforeach
    </table>
    </div>

@endsection
