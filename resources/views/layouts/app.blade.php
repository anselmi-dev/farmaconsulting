<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="/manifest.json">

    <!-- Título -->
    <title>@section('title', config('app.name', 'Farmaconsulting'))</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}?v=228" rel="stylesheet">
    <link href="{{ asset('plugins/notifications.css') }}" rel="stylesheet">


    <!-- Alpine Plugins -->
    {{-- <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script> --}}
    <!-- Alpine Core -->
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <script src="{{ asset('js/alpine.js') }}"></script>
    
    <style>
        [x-cloak] { display: none !important; }
    </style>
    @stack('styles')

    @laravelPWA

    @stack('scripts-head')

    <script type="text/javascript">
        // Initialize the service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceworker.js', {
                scope: '.'
            }).then(function (registration) {
                // Registration was successful
                console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
            }, function (err) {
                // registration failed :(
                console.log('Laravel PWA: ServiceWorker registration failed: ', err);
            });
        }
    </script>
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

            <div >
                <div class="relative min-h-screen" id="content">
                    @yield('content')
                </div>
            </div>

            @auth
                @includeIf('layouts.parts.menu')
            @endauth
        </div>
    </div>
    
    <script src="{{ asset('js/app.js?v=3') }}"></script>
    <script src="https://player.vimeo.com/api/player.js"></script>
    
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
                    resetSelectoChangeLabel();
                } else {
                    form.classList.remove('loading');
                    showNotification(xhr.response.message ?? "Ocurrió un error", 'error');
                }
            };
            xhr.send(data);
        }
    </script>

    <script>
        function selectorChangeLabel (id_label, name_input) {
            let inputs = document.querySelectorAll('input[name="'+name_input+'"]');
            inputs.forEach(element => {
                element.addEventListener('change', function () {
                    let checkeds = document.querySelectorAll('input[name="'+name_input+'"]:checked');
                    let element_label = document.getElementById(id_label);
                    let label_default = null;
                    if (checkeds.length > 0) {
                        for (let index = 0; index < checkeds.length; index++) {
                            const checked = checkeds[index];
                            label_default = label_default ? label_default + ', ' + checked.getAttribute('label') : checked.getAttribute('label');
                        }
                    }
                    if (label_default) {
                        element_label.innerHTML = label_default;
                    } else {
                        element_label.innerHTML = element_label.getAttribute('default');
                    }

                    console.log('checkeds_count')
                    let checkeds_count = document.getElementById(id_label + '_count')
                    if (checkeds_count) {
                        checkeds_count.innerHTML = checkeds.length > 0 ? "("+checkeds.length+") seleccionados" : null;
                    }
                });
            });
            
            let checkeds = document.querySelectorAll('input[name="'+name_input+'"]:checked');
            let element_label = document.getElementById(id_label);
            let label_default = null;
            if (checkeds.length > 0) {
                for (let index = 0; index < checkeds.length; index++) {
                    const checked = checkeds[index];
                    label_default = label_default ? label_default + ', ' + checked.getAttribute('label') : checked.getAttribute('label');
                }
            }
            let checkeds_count = document.getElementById(id_label + '_count')
            if (checkeds_count) {
                checkeds_count.innerHTML = checkeds.length > 0 ? "("+checkeds.length+") seleccionados" : null;
            }
            element_label.innerHTML = label_default ? label_default : element_label.getAttribute('default');
        }

        function resetSelectoChangeLabel () {
            let inputs = document.querySelectorAll('.custom-select__label');
            inputs.forEach(element => {
                element.innerHTML = element.getAttribute('default');
            });
        }
    </script>
    <!-- Scripts -->
    @stack('scripts')
</body>

</html>
