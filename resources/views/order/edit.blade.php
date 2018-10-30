@extends('layouts.app')
@section('header')
    <h1 >Order / Edit</h1>
@endsection
@section('content')
    <div class="col-md-6">
        {!! Form::model($order,['method'=>'PATCH','action'=>['OrderController@update',$order->id],'class'=>'form-horizontal']) !!}

        {!! Form::hidden('order_code',$order->order_code,['class'=>'form-control ']) !!}

        <div class="form-group">
            {!! Form::label('purchase_date','Delivery date:') !!}

                {!! Form::text('purchase_date',$date,['class'=>'form-input']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('supplier_id','Supplier:') !!}

                {!! Form::select('supplier_id',$supplier,null,['class'=>'form-input']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('total_amount','Total amount:') !!}

                {!! Form::text('total_amount',null,['class'=>'form-input']) !!}

        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary ">Edit</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection