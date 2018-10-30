@extends('layouts.app')
@section('header')
    <h1 >item / edit</h1>
@endsection
@section('content')
    <div class="col-md-6">
        {!! Form::model($item,['method'=>'PATCH','action'=>['ItemController@update',$item->id],'class'=>'form-horizontal']) !!}

        {!! Form::hidden('product_code',$item->product_code,['class'=>'form-control ']) !!}

        <div class="form-group">
            {!! Form::label('name','Name:') !!}

                {!! Form::text('name',null,['class'=>'form-input']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('product_group_id','Product:') !!}

                {!! Form::select('product_group_id',$products,null,['class'=>'form-input']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('brand_id','Brand:') !!}

                {!! Form::select('brand_id',$brands,null,['class'=>'form-input']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('default_uom','Default unit:') !!}

                {!! Form::text('default_uom',null,['class'=>'form-input ']) !!}
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary ">Edit</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection