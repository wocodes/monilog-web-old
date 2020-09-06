<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    <div>
        <nav class="navbar navbar-expand-md shadow-sm" style="padding: 0">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="images/logo.png" width="100px" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <navbar-component></navbar-component>
            </div>
        </nav>

        <main class="py-4">

            <div class="text-center">
                <small>Today is</small>
                <h2 class="col-md-12"><?= date('dS M, Y'); ?></h2>
            </div>
            <hr>

            @yield('content')
        </main>
    </div>

    <div class="background-items" id="background-1"></div>
    <div class="background-items" id="background-2"></div>
    <div class="background-items" id="background-3"></div>
</body>

</html>
