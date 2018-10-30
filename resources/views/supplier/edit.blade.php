@extends('layouts.app')
@section('header')
    <h1 >supplier / edit</h1>
@endsection
@section('content')
    <div class="col-md-6" >
        {!! Form::model($supplier,['method'=>'PATCH','action'=>['SupplierController@update',$supplier->id],'class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}

                {!! Form::text('name',null,['class'=>'form-input ']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('address','Address:') !!}

                {!! Form::text('address',null,['class'=>'form-input']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('location','Location:') !!}

                {!! Form::text('location',null,['class'=>'form-input']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('telephone','Telephone:') !!}

                {!! Form::text('telephone',null,['class'=>'form-input']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}

                {!! Form::text('email',null,['class'=>'form-input']) !!}

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary ">Create</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection