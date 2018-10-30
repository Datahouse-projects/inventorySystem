@extends('layouts.app')
@section('header')
    <h1 >Products / edit</h1>
@endsection
@section('content')
    <div class="col-md-6" >
        {!! Form::model($product,['method'=>'PATCH','action'=>['ProductController@update',$product->id],'class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
                  {!! Form::text('name',null,['class'=>'form-input ']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('category','Category:') !!}

                {!! Form::select('category_id',$select,null,['class'=>'form-input']) !!}

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection