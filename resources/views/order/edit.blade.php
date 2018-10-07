@extends('layouts.app')
@section('header')
    <h1 >Order / Edit</h1>
@endsection
@section('content')
    <div class="col-md-6" style="margin: 0 auto">
        {!! Form::model($order,['method'=>'PATCH','action'=>['OrderController@update',$order->id],'class'=>'form-horizontal']) !!}

        {!! Form::hidden('order_code',$order->order_code,['class'=>'form-control ']) !!}

        <div class="form-group">
            {!! Form::label('purchase_date','Delivery date:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-10">
                {!! Form::text('purchase_date',$date,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('supplier_id','Supplier:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-10">
                {!! Form::select('supplier_id',$supplier,null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('total_amount','Total amount:',['class'=>'control-label col-xs-2']) !!}
            <div class="col-xs-8">
                {!! Form::text('total_amount',null,['class'=>'form-control ']) !!}
            </div>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Edit</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection