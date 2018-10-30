@extends('layouts.app')
@section('header')
    <h1 >supplier / create</h1>
 @endsection
@section('content')
    <div class="col-md-6" >
        {!! Form::open(['method'=>'POST','action'=>'SupplierController@store','class'=>'form-horizontal']) !!}
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
                <button type="submit" class="btn btn-primary">Create</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection