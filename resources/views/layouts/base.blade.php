<!DOCTYPE html>
<html lang="en" class="h-screen overflow-hidden">
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
<body class="overflow-x-hidden h-full bg-white dark:bg-bg bg-no-repeat bg-contain bg-fixed">
    <div class="flex flex-col">
        <header class="container mx-auto w-full md:grid grid-cols-3 hidden">
            @include('includes.header')
        </header>
        <div class="flex flex-col items-center mb-20 mx-auto w-[98%] rounded-full bg-bg dark:bg-main">
            @yield('pageTitle')
        </div>
        <main class="container mx-auto mb-14">
            @yield('content')
        </main>
    </div>
</body>
<script src="{{ asset('js/main.js') }}"></script>
</html>
