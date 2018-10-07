@extends('layouts.app')
@section('header')
    <h1 >Products / create</h1>
@endsection
@section('content')
    <div class="col-md-6" style="margin: 0 auto">
        {!! Form::open(['method'=>'POST','action'=>'ProductController@store','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('name','Name:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-8">
                {!! Form::text('name',null,['class'=>'form-control ']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('category','Category:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-10">
                {!! Form::select('category_id',$select,null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Create</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection