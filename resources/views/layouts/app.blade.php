
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/notifications/dist/notifications.css') }}" rel="stylesheet">

    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('styles')

    @laravelPWA

</head>
<body class="{{ Route::currentRouteName() }}">

    <div>
        @guest
            @includeIf('layouts.parts.intro')
        @endguest

        <div>
            @includeIf('layouts.parts.header.nav')

            <div class="relative min-h-screen" id="content">

                @yield('content')
            </div>

            @includeIf('layouts.parts.menu')
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('plugins/notifications/dist/notifications.js') }}"></script>
    <script>
        const myNotification = window.createNotification({
            showDuration: 3500,
            positionClass: 'nfc-top-right',
            displayCloseButton: true,
        });
    </script>
    <!-- Scripts -->
    @stack('scripts')

    <style>
        .url-content {
        }
    </style>
</body>
</html>
