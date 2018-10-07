@extends('layouts.app')
@section('header')
    <h1 >category / create</h1>
@endsection
@section('content')
    <div class="col-md-6" style="margin: 0 auto">
        {!! Form::open(['method'=>'POST','action'=>'CategoryController@store','class'=>'form-horizontal']) !!}
        <div class="form-group">

            {!! Form::label('name','Category name',['class'=>'control-label']) !!}

                {!! Form::text('name',null,['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Create</button>

        </div>
        {!! Form::close() !!}
    </div>
@endsection