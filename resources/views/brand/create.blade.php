@extends('layouts.app')
@section('header')
    <h1 >brand / create</h1>
@endsection
@section('content')
    <div class="col-md-6 " style="">
    {!! Form::open(["method"=>"post","action"=>"BrandController@store","class"=>"form-horizontal"]) !!}
    <div class="form-group">
    {!! Form::label('name','Brand name: ')!!}
        {!! Form::text('name',null,["class"=>"form-input"]) !!}
    </div>
     {!! Form::submit('Save',['class'=>'btn btn-primary ']) !!}

        {!! Form::close() !!}
    </div>

@endsection