@extends('layouts.app')
@section('header')
    <h1 >category / edit</h1>
@endsection
@section('content')
    <div class="col-sm-6" style="margin: 0 auto">
        {!! Form::model($category,['action'=>['CategoryController@update',$category->id],'method'=>'PATCH','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('name','Category name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Edit</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection