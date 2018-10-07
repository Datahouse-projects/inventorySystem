@extends('layouts.app')
@section('header')
    <h1 >brand / create</h1>
@endsection
@section('content')
    <div class="col-md-6 " style="margin:0 auto">
    {!! Form::open(["method"=>"post","action"=>"BrandController@store","class"=>"form-horizontal"]) !!}
    <div class="form-group">
    {!! Form::label('name','Brand name: ')!!}
        {!! Form::text('name',null,["class"=>"form-control"]) !!}
    </div>
     {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>

@endsection