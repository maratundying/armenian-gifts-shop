<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/category.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('css/forma.css')}}">
        <link rel="stylesheet" href="{{asset('css/global.css')}}">
        <link rel="stylesheet" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/media.css')}}">
        <link rel="stylesheet" href="{{asset('css/slide.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/table.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        @yield('styles')
        @yield('title')
    </head>
    <body>
        @include('.front//components/svg_icons')
        @include('front/components/_header')
        @yield('content')
        @include('front/components/_footer')
    </body>
    @yield('scripts')
    <script type="text/javascript" src="{{asset('js/menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/search.js')}}"></script>
{{--    <script type="text/javascript" src="{{asset('js/slider.js')}}"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
