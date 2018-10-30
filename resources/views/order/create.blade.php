@extends('layouts.app')
@section('header')
    <h1 >Orders / create</h1>
@endsection
@section('content')
    <div class="col-md-6" >
    {!! Form::open(['method'=>'POST','action'=>'OrderController@store','class'=>'form-horizontal']) !!}
        {!! Form::hidden('order_code',$new_code,['class'=>'form-control ']) !!}

    <div class="form-group">
        {!! Form::label('purchase_date','Delivery date:') !!}

            {!! Form::text('purchase_date',$date,['class'=>'form-input']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('supplier_id','Supplier:',['class'=>'control-label col-xs-2']) !!}

            {!! Form::select('supplier_id',$supplier,null,['class'=>'form-input']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('total_amount','Total amount:',['class'=>'control-label col-xs-2']) !!}

            {!! Form::text('total_amount',null,['class'=>'form-input ']) !!}

    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary ">Create</button>
    </div>
    {!! Form::close() !!}
    </div>
@endsection