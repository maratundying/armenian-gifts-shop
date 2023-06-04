@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
<div class="d-flex justify-content-between">
    <h1>Categories</h1>
    <a class="btn btn-success" href="{{route('categories.create')}}">CREATE</a>
</div>
@stop

@section('content')
<table>
    <tr>
        <td>ID</td>
        <td>Country</td>
        <td>Category</td>
        <td>Available</td>
        <td>Actions</td>
    </tr>
    @foreach($categories as $key => $category)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$category['country']}}</td>
            <td>{{$category['name']}}</td>
            <td>{{$category['is_available'] ? 'Yes' : 'No'}}</td>
            <td>
                <a href="{{route('categories.edit', $category['id'])}}" class="btn btn-success">EDIT</a>
                <a href="{{route('categories.destroy', $category['id'])}}" class="btn btn-danger">DELETE</a>
            </td>
        </tr>
    @endforeach
</table>
@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/table.css')}}">
@stop

@section('js')

@stop
