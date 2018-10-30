@extends('layouts.app')
@section('header')
    <h1 >Products / create</h1>
@endsection
@section('content')
    <div class="col-md-6" >
        {!! Form::open(['method'=>'POST','action'=>'ProductController@store','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}

                {!! Form::text('name',null,['class'=>'form-input ']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('category','Category:') !!}

                {!! Form::select('category_id',$select,null,['class'=>'form-input']) !!}

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection