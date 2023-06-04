@extends('adminlte::page')

@section('title', 'Edit category')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>EDIT CATEGORY</h1>
        {{--        <a class="btn btn-success" href="{{route('categories.create')}}">CREATE</a>--}}
    </div>
@stop

@section('content')
    @include('.admin.categories._form', ['model' => $model])
@stop

@section('css')

@stop

@section('js')

@stop
