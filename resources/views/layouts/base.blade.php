<!DOCTYPE html>
<html lang="en" class="h-screen">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kockers Society</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-white dark:bg-bg w-screen h-screen py-6 bg-no-repeat bg-contain bg-fixed overflow-x-hidden">
    <div class="container mx-auto flex flex-col">
        @include('includes.header')
        <main class="mt-24">
            @yield('content')
        </main>
        @include('includes.nav')
    </div>
</body>
<script src="{{ asset('js/main.js') }}"></script>
</html>