@extends('layouts.app')
@section('header')
    <h1 >item / create</h1>
@endsection
@section('content')
    <div class="col-md-6">
        {!! Form::open(['method'=>'POST','action'=>'ItemController@store','class'=>'form-horizontal']) !!}

            {!! Form::hidden('product_code',$new_code,['class'=>'form-control ']) !!}

        <div class="form-group">
            {!! Form::label('name','Name:') !!}

                {!! Form::text('name',null,['class'=>'form-input ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('brand_id','Brand:') !!}

                {!! Form::select('brand_id',$brands,null,['class'=>'form-input']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('product_group_id','Product:') !!}

                {!! Form::select('product_group_id',$products,null,['class'=>'form-input']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('default_uom','Default unit:') !!}

                {!! Form::text('default_uom',null,['class'=>'form-input ']) !!}
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection