@extends('layouts.app')
@section('header')
    <h1 >Products / edit</h1>
@endsection
@section('content')
    <div class="col-md-6" >
        {!! Form::model($stock,['method'=>'PATCH','action'=>['StockController@update',$stock->id],'class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('reorder_level','Reorder:') !!}
            {!! Form::text('reorder_level',null,['class'=>'form-input ']) !!}

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection