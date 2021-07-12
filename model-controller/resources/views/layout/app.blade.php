<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>Model & Controller</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bona+Nova:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

    <header id="site_header">
        @yield('header_content')
    </header>

    <main id="site_main">
        @yield('main_content')
    </main>

    </body>
</html>
