<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inventory') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('css/bootstrap.min.css') }}" defer></script>
    <script src="{{ asset('css/font-awesome.min.css') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>

<div id="container">
    <div id="navigation">

        <h1> <span><i class="fa fa-warehouse"></i></span> inventory</h1>

            <ul id="links">
                <li><a href=""><i class="fa fa-home "></i>Dashboard</a></li>
                <li><a href="{{route('brand.index')}}"><i class="fa fa-coins "></i>Brands</a></li>
                <li><a href="{{route('category.index')}}"> <i class="fa fa-calendar-times"></i>Categories</a></li>
                <li><a href="{{route('supplier.index')}}"><i class="fa fa-bus"></i>Suppliers</a></li>
                <li><a href="{{route('product.index')}}"><i class="fa fa-archive"></i>Products</a></li>
                <li><a href="{{route('item.index')}}"><i class="fa fa-fire"></i>Items</a></li>
                <li><a href="{{route('order.index')}}"><i class="fa fa-dolly"></i>Orders</a></li>
                <li><a href="{{route('warehouse.index')}}"><i class="fa fa-warehouse"></i>Warehouses</a></li>

            </ul>


    </div>
    <div id="content">
        <nav id="bar">
            <span><a href="" ><i class="fa fa-user-cog"></i></a> </span>
            <input type="search"  placeholder="Search..." name="search" id="search" />
        </nav>
        <div id="secondary">
            @yield('header')
        </div>
        <div id="menu">
        @yield('content')
         </div>
    </div>
</div>



</body>
</html>
