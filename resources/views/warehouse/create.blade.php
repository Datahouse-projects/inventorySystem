@extends('layouts.app')
@section('header')
    <h1 >Warehouse / create</h1>
@endsection
@section('content')
    <div class="col-md-6" style="margin: 0 auto">
        {!! Form::open(['method'=>'POST','action'=>'WarehouseController@store','class'=>'form-horizontal']) !!}


        <div class="form-group">
            {!! Form::label('name','Name:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-8">
                {!! Form::text('name',null,['class'=>'form-control ']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('address','Address:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-10">
                {!! Form::text('address',null,['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('email','Email:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-10">
                {!! Form::text('email',null,['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('location','Location:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-8">
                {!! Form::text('location',null,['class'=>'form-control ']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('telephone','Telephone:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-8">
                {!! Form::text('telephone',null,['class'=>'form-control ']) !!}
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Create</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection