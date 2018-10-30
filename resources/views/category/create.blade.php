@extends('layouts.app')
@section('header')
    <h1 >category / create</h1>
@endsection
@section('content')
    <div class="col-md-6" >
        {!! Form::open(['method'=>'POST','action'=>'CategoryController@store','class'=>'form-horizontal']) !!}
        <div class="form-group">

            {!! Form::label('name','Category name:') !!}

                {!! Form::text('name',null,['class'=>'form-input']) !!}

        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>

        </div>
        {!! Form::close() !!}
    </div>
@endsection