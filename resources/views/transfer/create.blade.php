@extends('layouts.app')
@section('header')
    <h1 >item / create</h1>
@endsection
@section('content')
    <div class="col-md-6">
        {!! Form::open(['method'=>'POST','action'=>'TransferController@store','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('product_variety_id','Product:') !!}

            {!! Form::select('product_variety_id',$quantity,null,['class'=>'form-input']) !!}
            </div>
        <div class="form-group">
            {!! Form::label('quantity','Quantity:') !!}

            {!! Form::text('quantity',null,['class'=>'form-input ']) !!}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection