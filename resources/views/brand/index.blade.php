@extends ('layouts.app')




@section('content')
    <div class="center-block">
    <h1 class="text-black-50 text-center">Welcome to brands</h1>
    <a href="{{route('brand.create')}}">
        <button  class="btn btn-primary btn-lg right" style="float: right; margin-bottom:10px">New</button>
    </a>
    <table class="table table-striped" >
    @foreach($brands as $brand)
        <tr>
            <td>{{$brand->name}}</td>
            <td>
                <a href="{{route('brand.edit',$brand->id)}}">
                <i class="fa fa-edit"></i>
                </a>
            </td>

            <td>
                <a href="delete/{{$brand->id}}">
                <i class="fa fa-trash"></i>
                </a>
            </td>
            <td><i class="fa fa-eye"></i></td>

        </tr>
        @endforeach
    </table>
    </div>
@endsection