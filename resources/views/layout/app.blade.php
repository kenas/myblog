<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/css/main.css')}}">
    <link rel="stylesheet" href="{{ url('/css/navbar.css')}}">
    <link rel="stylesheet" href="{{ url('/css/first-article.css')}}">
    <link rel="stylesheet" href="{{ url('/css/content.css')}}">
    <link rel="stylesheet" href="{{ url('/css/hot-articles.css')}}">
    <script src="https://kit.fontawesome.com/6667dbee1d.js" crossorigin="anonymous"></script>
    <title>{{ config('app.name') }} - @yield('title')</title>
</head>
<body>
    @include('navbar.navbar')

        @yield('content')
    
</body>
</html>