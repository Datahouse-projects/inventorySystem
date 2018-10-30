@extends('layouts.app')
@section('header')
    <h1 >brand / edit</h1>
@endsection
@section('content')
    <div class="col-md-6">


    {!! Form::model($brand,['method'=>'PATCH','action'=>['BrandController@update',$brand->id]]) !!}
        <div class="form-group">
             {!! Form::label('Brand name:') !!}
            {!! Form::text('name',null,['class'=>'form-input']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    </div>


    @endsection