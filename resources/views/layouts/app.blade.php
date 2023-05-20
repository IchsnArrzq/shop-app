<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="drawer drawer-mobile">

        <input id="drawer-app" type="checkbox" class="drawer-toggle" />

        {{-- drawer-content --}}
        <div class="drawer-content flex flex-col">

            @include('layouts.partials.navbar')

            <main>

                @include('layouts.partials.breadcrumbs')

                {{ $slot }}

                @include('layouts.partials.footer')

            </main>

        </div>

        {{-- drawer-side --}}
        <div class="drawer-side">
            <label for="drawer-app" class="drawer-overlay"></label>

            @include('layouts.navigation')

        </div>
    </div>
    @stack('scripts')
</body>

</html>
