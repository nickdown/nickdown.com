<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased flex flex-col min-h-full">
@include('layouts.header.header')
@if($title ?? false)
    <header class="bg-white shadow-sm">
        <div class="max-w-5xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <h1 class="text-lg leading-6 font-semibold text-gray-900">{{ $title }}</h1>
        </div>
    </header>
@endif
<main class="flex-grow">
    <div class="max-w-5xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
</main>
@include('layouts.footer')
</body>
</html>
