<!DOCTYPE html>
<html lang="{{str_replace('_', '_', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token () }}">
    <meta name="csrf-param" content="_token">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src=" {{asset('js/app.js')}}"></script>
</head>
<body>
    <div class="container-mt4">
        <h1>@yield('header')</h1>
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>