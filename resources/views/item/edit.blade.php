@extends('layouts.app')
@section('header')
    <h1 >item / edit</h1>
@endsection
@section('content')
    <div class="col-md-6" style="margin: 0 auto">
        {!! Form::model($item,['method'=>'PATCH','action'=>['ItemController@update',$item->id],'class'=>'form-horizontal']) !!}

        {!! Form::hidden('product_code',$item->product_code,['class'=>'form-control ']) !!}

        <div class="form-group">
            {!! Form::label('name','Name:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-8">
                {!! Form::text('name',null,['class'=>'form-control ']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('product_group_id','Product:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-10">
                {!! Form::select('product_group_id',$products,null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('brand_id','Brand:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-10">
                {!! Form::select('brand_id',$brands,null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('default_uom','Default unit:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-8">
                {!! Form::text('default_uom',null,['class'=>'form-control ']) !!}
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Edit</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection