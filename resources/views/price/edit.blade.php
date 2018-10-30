@extends('layouts.app')
@section('header')
    <h1 >supplier / edit</h1>
@endsection
@section('content')
    <div class="col-md-6" >
        {!! Form::model($batch,['method'=>'PATCH','action'=>['PriceController@update',$batch->id],'class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('price','Product price:') !!}

            {!! Form::text('product_price',null,['class'=>'form-input ']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('from_date','From date:') !!}

            {!! Form::text('from_date',null,['class'=>'form-input ']) !!}

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary ">Create</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection