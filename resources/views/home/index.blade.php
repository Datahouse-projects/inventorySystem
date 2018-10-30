@extends('layouts.app')
@section('header')
    <h1>Home</h1>
@endsection
@section('content')
    <div >

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <div  id="info">
                <div class="info-details text-center">
                    NEW BATCH
                    <div class="sign">
                       <a href="{{route('batch.create')}}" ><i class="fa fa-plus-circle"></i></a>
                    </div>
                </div>
                <div class="info-details text-center">
                    TRANSFER PRODUCT
                    <div class="sign">
                        <a href="{{route('transfer.create')}}" ><i class="fa fa-minus-circle"></i></a>
                    </div>

                </div>
                <div class="info-details text-center">
                    LOW STOCK PRODUCTS
                    <div class="sign1">
                        <a class="badge badge-danger" href="{{route('stock.show',1)}}">{{$sum}}</a>
                    </div>
                </div>
                <div class="info-details">
                    PROMOTION
                </div>

            </div>


        <div id="product-info">
            <div id="product-details" class="table-responsive-md">
             <table class="table table-borderless " id="details">
                 <tr class="header">
                     <td colspan="2"  class="detail-header">product details</td>
                 </tr>
                 <tr>
                     <td class="detail-item">all item groups</td>
                     <td><a href="{{route('product.index')}}"><span class="badge badge-pill badge-primary">{{$group}}</span></a></td>
                 </tr>
                 <tr>
                     <td class="detail-item">all product</td>
                     <td><a href="{{route('item.index')}}"> <span class="badge badge-pill badge-primary">{{$product}}</span></a> </td>
                 </tr>
             </table>
            </div>
            <div id="product-cons">

            </div>
        </div>
    </div>
@endsection
