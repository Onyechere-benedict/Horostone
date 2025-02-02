@props(['from' => 'login'])

@php
    $url = $formWidth = '';
    if ($from === 'login') {
        $url = relative_asset("images/login.jpg");
        $formWidth = 'md';
    } else if ($from === 'register') {
        $url = relative_asset("images/registration.jpg");
        $formWidth = '3xl';
    }

@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect"
          href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
          rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="relative min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-no-repeat bg-cover bg-center bg-fixed relative after:absolute after:top-0 after:left-0 after:size-full after:bg-black/50"
         style="background-image: url({{ $url }})">
        {{-- <img src="{{ $url }}" /> --}}
        <div class="absolute z-10 top-0">
            <a href="/"
               class="inline-block w-[300px]">
                <x-application-logo shade="light"
                                    class="fill-current text-gray-500 w-full" />
            </a>
        </div>

        <div
             class="relative z-10 w-full sm:max-w-{{ $formWidth }} px-6 py-4 pt-6 bg-white/80 dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>