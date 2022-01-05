<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @laravelPWA

</head>
<body>
    <div>
        @yield('content')
    </div>

    @includeIf('layouts.parts.notifications')

    @if(Session::has('success'))
        <script>
            showNotification("{{ Session::get('success') }}")
        </script>
    @endif

    @if(Session::has('errors'))
        <script>
            showNotification("{{ Session::get('errors')->first() }}", "error")
        </script>
    @endif
    
    {{--
    @if(Session::has('success'))
        <div x-data="{isShowing: true }" >
            <div x-show="isShowing" class="fixed top-0 left-0 z-20 text-white w-full text-center bg-gray-600 uppercase p-2 opacity-80">
                <div class="px-5">
                    {{ Session::get('success') }}
                </div>
                <button @click="isShowing = false" class="absolute top-0 bottom-0 my-auto right-2">X</button>
            </div>
        </div>
    @endif

    @if(Session::has('errors'))
        <div x-data="{ isShowing: true }" >
            <div x-show="isShowing" class="fixed top-0 left-0 z-20 text-white w-full text-center bg-red-600 uppercase p-2 opacity-80">
                <div class="px-5">
                    {{ Session::get('errors')->first() }}
                </div>
                <button @click="isShowing = false" class="absolute top-0 bottom-0 my-auto right-2">X</button>
            </div>
        </div>
    @endif
    --}}
    
</body>
</html>
