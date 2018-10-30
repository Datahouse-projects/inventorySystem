@extends('layouts.app')
@section('header')
    <h1 >Order / details</h1>
@endsection
@section('content')

    <a id="add"  href="{{route('order.create')}}"><button class="btn btn-success" id="add-data">Add</button></a>
    <div id="table">
    <table class="table table-bordered">
        <tr>
            <th >Item</th>
            <th>Quantity</th>
            <th>Unit measure</th>
            <th>Total amount</th>
            <th>Manufacture date</th>
            <th>Expire date</th>


        </tr>
        @foreach($orderlines as $orderline)
            <tr>
                <td>{{$name[$orderline->pivot->product_variety_id][0]}}</td>
                <td>{{$orderline->pivot->quantity}}</td>
                <td>{{$orderline->unit_measure.' '.$unit[$orderline->pivot->product_variety_id][0]}}</td>
                <td>{{$orderline->pivot->total_amount}}</td>
                <td>{{$orderline->pivot->manufacture_date}}</td>
                <td>{{$orderline->pivot->expire_date}}</td>


            </tr>
        @endforeach
    </table>
    </div>
    <!--
    <div id="orderModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" id="order_date">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add data</h4>
                    </div>
                    <div class="modal-body">

                        <span id="form_output"></span>
                        <div class="form-group">
                            <label >Enter first name:</label>
                            <input type="text" id="first_name" name="first_name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label >Enter last name:</label>
                            <input type="text" id="last_name" name="last_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="button_action" id="button_action"  value="insert" />
                        <input type="submit" name="submit" id="action" value="Add" class="btn btn-info"/>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
    -->


@endsection
