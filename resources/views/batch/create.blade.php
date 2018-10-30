@extends('layouts.app')
@section('header')
    <h1 >New batch</h1>
@endsection
@section('content')
    <div class="col-md-8">
        {!! Form::open(['method'=>'POST','action'=>'BatchController@store','class'=>'form-horizontal']) !!}

        {!! Form::hidden('batch_code',$new_code,['class'=>'form-control ']) !!}
        <div class="form-group">
            {!! Form::label('product_variety_id','Product:') !!}

            {!! Form::select('product_variety_id',$quantity,null,['class'=>'form-input']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('delivery_date','Delivery date:') !!}

            {!! Form::text('delivery_date',null,['class'=>'form-input ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('initial_stock','Initial stock:') !!}

            {!! Form::text('initial_stock',null,['class'=>'form-input ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('total_amount','Total amount:') !!}

            {!! Form::text('total_amount',null,['class'=>'form-input ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('manufacture_date','Manufacture date:') !!}

            {!! Form::text('manufacture_date',null,['class'=>'form-input ']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('expire_date','Expire date:') !!}

            {!! Form::text('expire_date',null,['class'=>'form-input ']) !!}
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection