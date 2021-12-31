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
    <link href="{{ mix('css/app.css') }}?v=224" rel="stylesheet">
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

        @section('intro')
            @guest
                @includeIf('layouts.parts.intro')
            @endguest
        @show

        @if (\Session::has('after_login'))
            @includeIf('layouts.parts.after_login')
        @endif

        <div>
            @section('nav')
                @includeIf('layouts.parts.header.nav')
            @show

            <div class="relative min-h-screen" id="content">
                @yield('content')
            </div>

            @auth
                @includeIf('layouts.parts.menu')
            @endauth
        </div>
    </div>

    
    <script src="{{ asset(mix('js/app.js')) }}"></script>
    
    @includeIf('layouts.parts.notifications')
    
    <script>
        const slider = document.querySelectorAll('[toggle-slider]');
        for (let index = 0; index < slider.length; index++) {
            slider[index].addEventListener('click', () => {
                const id = slider[index].getAttribute('toggle-slider');
                document.getElementById(id).classList.toggle('active');
            });
        }
    </script>
    <script>
        function handleFormSubmit(form, callback, constraints) {
            var errors = validate(form, constraints);
            showErrors(form, errors || {});
            if (!errors) {
                form.classList.add('loading');
                callback(form, new FormData(form));
            }
        }

        function showErrors(form, errors) {
            _.each(form.querySelectorAll("input[name], select[name], textarea[name]"), function(input) {
                showErrorsForInput(input, errors && errors[input.name]);
            });
        }

        // Shows the errors for a specific input
        function showErrorsForInput(input, errors) {
            // This is the root of the input
            var formGroup = closestParent(input.parentNode, "form-group");
            try {
                var messages = formGroup.querySelector(".form-group-messages");
            } catch (error) {
                var messages = null;
            }
            // First we remove any old messages and resets the classes
            if (formGroup) {
                resetFormGroup(formGroup);
                // If we have errors
                if (errors) {
                    // we first mark the group has having errors
                    formGroup.classList.add("has-error");
                    // then we append all the errors
                    _.each(errors, function(error) {
                        if (messages)
                            addError(messages, error);
                    });
                } else {
                    // otherwise we simply mark it as success
                    formGroup.classList.add("has-success");
                }
            }
        }

        function closestParent(child, className) {
            if (!child || child == document) {
                return null;
            }
            if (child.classList.contains(className)) {
                return child;
            } else {
                return closestParent(child.parentNode, className);
            }
        }

        function resetFormGroup(formGroup) {
            // Remove the success and error classes
            formGroup.classList.remove("has-error");
            formGroup.classList.remove("has-success");
            // and remove any old messages
            _.each(formGroup.querySelectorAll(".help-block.error"), function(el) {
                el.parentNode.removeChild(el);
            });
        }

        function addError(messages, error) {
            var block = document.createElement("p");
            block.classList.add("help-block");
            block.classList.add("error");
            block.innerText = error;
            messages.appendChild(block);
        }

        function ajaxForm(form, data) {
            var xhr = new XMLHttpRequest();
            xhr.responseType = 'json';
            xhr.open(form.method, form.action);
            xhr.setRequestHeader("Accept", "application/json");
            xhr.onreadystatechange = function() {
                if (xhr.readyState !== XMLHttpRequest.DONE)
                    return;
                if (xhr.status === 200) {
                    form.reset();
                    form.classList.remove('loading');
                    showNotification(xhr.response.message ?? "Mensaje enviado");
                } else {
                    form.classList.remove('loading');
                    showNotification(xhr.response.message ?? "Ocurrió un error", 'error');
                }
            };
            xhr.send(data);
        }
    </script>
    <!-- Scripts -->
    @stack('scripts')
</body>

</html>
