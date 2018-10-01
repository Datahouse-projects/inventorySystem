@extends('layouts.app')
@section('content')
    <div class="col-md-6" style="margin: 0 auto">
        <h1 class="text-black-50 text-uppercase text-center">Create category</h1>
        {!! Form::open(['method'=>'POST','action'=>'SupplierController@store','class'=>'form-horizontal']) !!}
        <div class="form-group">
            <div class="col-sm-5 " >
                {!! Form::label('name','Name:',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-6" >
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>

        </div>
        <div class="form-group">
            <div class="col-sm-5 " >
                {!! Form::label('address','Address:',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-6" >
                {!! Form::text('address',null,['class'=>'form-control']) !!}
            </div>

        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
@endsection