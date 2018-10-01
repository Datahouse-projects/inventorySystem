@extends('layouts.app')
@section('content')

    <h1 class="text-center">Home category</h1>
    <a href="{{route('category.create')}}" style="float: right">
        <button style="margin-bottom: 10px" type="submit" class="btn btn-success">Add</button>
    </a>
    <table class="table table-striped">
        @foreach($categories as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td><a href="{{route('category.edit',$category->id)}}"><i class="fa fa-edit"></i> </a></td>
            <td><a href="delete/{{$category->id}}"><i class="fa fa-trash"></i></a></td>
            <td><a href=""><i class="fa fa-eye"></i> </a> </td>
        </tr>
         @endforeach

    </table>
@endsection