@extends('layouts.app')
@section('header')
    <h1 >Reorder level</h1>
@endsection
@section('content')
    <div id="table">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Unit measure</th>
                <th>Stock level</th>
                <th>Reorder level</th>
            </tr>
            @foreach($items as $item)
                @if(in_array($item->id,$id))
                <tr>
                    <td>{{$name[$item->id][0]}}</td>
                    <td>{{$measure[$item->id].' '.$uom[$item->id][0]}}</td>
                    <td>{{$stock[$item->id]}}</td>
                    <td>{{$reorder[$item->id][0]}}</td>
                </tr>
                @endif
            @endforeach
        </table>
    </div>

@endsection
