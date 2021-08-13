
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

    @laravelPWA

</head>
<body>

    <div>
        {{-- @includeIf('layouts.parts.header') --}}

        <div>
            @includeIf('components.menuTop')

            <div class="relative min-h-screen" style="padding-bottom: 90px">

                @yield('content')
            </div>

            @includeIf('components.menu')
        </div>

        {{-- @includeIf('layouts.parts.footer') --}}
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
</body>
</html>
