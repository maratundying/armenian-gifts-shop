@extends('adminlte::page')

@section('title', 'Products')
@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Products</h1>
        <a class="btn btn-success" href="{{route('products.create')}}">CREATE</a>
    </div>
    @include('admin._flash_messages')
@stop

@section('content')
    <table id="products_grid">
        <thead>
        <tr>
            <td>ID</td>
            <td>Image</td>
            <td>Name</td>
            <td>Short description</td>
            <td>Long description</td>
            <td>Characteristics</td>
            <td>Price</td>
            <td>Is available</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key => $product)
            <tr>
                <td>{{$key + 1}}</td>
                <td style="margin: 0; padding: 0; text-align: center"><img src="{{Storage::url($product->image->image)}}" height="100px" width="100px" style="object-fit: cover" alt=""></td>
                <td>{{$product['name']}}</td>
                <td>{{$product['short_description']}}</td>
                <td>{{$product['long_description']}}</td>
                <td>{{$product['characteristics']}}</td>
                <td>{{$product['price']}}</td>
                <td>{{$product['is_available'] ? 'Yes' : 'No'}}</td>
                <td>
                    <a href="{{route('categories.edit', $product['id'])}}" class="btn btn-success">EDIT</a>
                    <a href="{{route('categories.destroy', $product['id'])}}" class="btn btn-danger">DELETE</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
@stop

@section('js')
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $('#products_grid').DataTable();
    </script>
@stop
