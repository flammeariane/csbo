<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} {{ sprintf(' - %s', $title ?? '') ?? null }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>

    <div id="app">

        <header>
            <section class="container">
                <div class="row">
                    <div class="col-8 mt-4 pl-3 mt-5">
                        <h2 class="text-white">{{ $title ?? null }}</h2>
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('images/logo.png') }}" alt="logo">
                    </div>
                </div>
            </section>
        </header>

        <main class="py-4 mt-5">
            @yield('content')
        </main>

    </div>

    <!-- Javascripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')

</body>

</html>
