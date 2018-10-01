@extends('layouts.app')
@section('content')
    <div class="col-md-6" style="margin: 0 auto;">

    <h1 class="text-dark">Edit brand</h1>
    {!! Form::model($brand,['method'=>'PATCH','action'=>['BrandController@update',$brand->id]]) !!}
        <div class="form-group">
             {!! Form::label('Brand name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    </div>


    @endsection