@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>CREATE CATEGORY</h1>
        {{--        <a class="btn btn-success" href="{{route('categories.create')}}">CREATE</a>--}}
    </div>
    @include('admin._flash_messages')

@stop

@section('content')
    @include('.admin.products._form')
@stop

@section('css')

@stop

@section('js')

@stop
