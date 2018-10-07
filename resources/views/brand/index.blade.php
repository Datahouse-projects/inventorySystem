@section('header')
    <h1 >brand / Home</h1>
@endsection
@extends ('layouts.app')
@section('content')
    <div id="table" >
    <a id="add" href="{{route('brand.create')}}">
        <button  class="btn btn-success  right" style="float: right; margin-bottom:10px">New</button>
    </a>
    <table class="table table-bordered" >
    @foreach($brands as $brand)
        <tr>
            <td>{{$brand->name}}</td>
            <td>
                <a href="{{route('brand.edit',$brand->id)}}">
                <i class="fa fa-edit"></i>
                </a>
            </td>

            <td>
                <a href="deletebrand/{{$brand->id}}">
                <i class="fa fa-trash"></i>
                </a>
            </td>
            <td><i class="fa fa-eye"></i></td>

        </tr>
        @endforeach
    </table>
    </div>
@endsection