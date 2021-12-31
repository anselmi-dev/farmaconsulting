<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Título -->
    <title>@section('title', config('app.name', 'Farmaconsulting'))</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/notifications.css') }}" rel="stylesheet">

    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('styles')

    @laravelPWA

</head>

<body class="{{ Route::currentRouteName() }}">

    <div>
        <div>
            <div class="relative min-h-screen">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="landings__footer">
        <div class="line-col">
            <div class="margin-bottom--xlarge">
                <p class="typography--medium text-center">Farmaconsulting App Versión 0.1</p>
                <p class="typography--medium text-center">
                    <a href="{{ route('terms') }}" class="typography--links">Términos de uso</a> y 
                    <a href="{{ route('politica-privacidad') }}" class="typography--links">Política de Privacidad</a>
                </p>
            </div>
            <div class="margin-bottom--xlarge">
                <img src="{{ asset('/images/logos/logo-secondary-gray.png') }}" alt="Secondary Farmaconsultimg gray logo" class="mx-auto">
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        window.animationFunction = function (classBase, classeActive) {
            // to show text on scroll
            window.addEventListener('scroll', () => {
                let screenPos = window.innerHeight;
                document.querySelectorAll(classBase).forEach ( item => {
                    let showPos = item.getBoundingClientRect().top;
                    if (showPos <= screenPos) {
                        item.classList.add(classeActive);
                    }
                })
            })
        }
        animationFunction('.landings-option-number__txt', 'landings-option-number__txt--active');
        animationFunction('.landings-option__img', 'landings-option__img--active');
    </script>

    @stack('scripts')
</body>
</html>
