@extends('layouts.app')
@section('header')
    <h1 >category / Home</h1>
@endsection
@section('content')


    <a id="add" href="{{route('category.create')}}" >
        <button  type="submit" class="btn btn-success">Add</button>
    </a>
    <div id="table">
    <table class="table table-bordered">
        @foreach($categories as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td><a href="{{route('category.edit',$category->id)}}"><i class="fa fa-edit"></i> </a></td>
            <td><a href="deletecategory/{{$category->id}}"><i class="fa fa-trash"></i></a></td>
            <td><a href=""><i class="fa fa-eye"></i> </a> </td>
        </tr>
         @endforeach

    </table>
    </div>
@endsection