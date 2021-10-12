<form action="{{ route('update-account') }}" method="POST" class="options__personal-info" id="form-my-account">
    @csrf
    <div class="margin-bottom--medium">
        {{-- Nombre --}}
        <div class="options__item">
            <label for="name">Nombre</label>
            <div class="options__input-container">
                <input data-rule="required" class="options__input" type="text" name="name" value="{{ auth()->user()->name }}" placeholder="{{ __('Nombre') }}">
                <button class="options__close-btn" type="button">
                    <svg class="icon-xsmall mx-auto" xmlns="http://www.w3.org/2000/svg"
                        width="19.092" height="19.092" viewBox="0 0 19.092 19.092">
                        <g transform="translate(-950.954 -1943.454)">
                            <line x1="23"
                                transform="translate(952.368 1944.868) rotate(45)"
                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2"></line>
                            <line x1="23"
                                transform="translate(952.368 1961.132) rotate(-45)"
                                fill="none" stroke="#ffffff" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2"></line>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="options__sub-label options__sub-label--active">
                <p class="typography--xsmall">Introduce tu nombre</p>
            </div>
        </div>
        {{-- Primer apellido --}}
        <div class="options__item">
            <label for="lastname">{{ __('Primer apellido') }}</label>
            <div class="line-row-between">
                <div class="options__input-container">
                    <input data-rule="required" class="options__input" type="text" value="{{ auth()->user()->lastname }}" name="lastname"
                        placeholder="{{ __('Apellido') }}">
                    <button class="options__close-btn" type="button">
                        <svg class="icon-xsmall mx-auto"
                            xmlns="http://www.w3.org/2000/svg" width="19.092"
                            height="19.092" viewBox="0 0 19.092 19.092">
                            <g transform="translate(-950.954 -1943.454)">
                                <line x1="23"
                                    transform="translate(952.368 1944.868) rotate(45)"
                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="23"
                                    transform="translate(952.368 1961.132) rotate(-45)"
                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></line>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="options__sub-label">
                <p class="typography--xsmall">Introduce tu primer apellido</p>
            </div>
        </div>
        {{-- Segundo apellido --}}
        <div class="options__item">
            <label for="lastname2">Segundo apellido</label>
            <div class="line-row-between">
                <div class="options__input-container">
                    <input data-rule="required" class="options__input" type="text" value="{{ auth()->user()->lastname2 }}" name="lastname2"
                        placeholder="{{ __('Apellido') }}">
                    <button class="options__close-btn" type="button">
                        <svg class="icon-xsmall mx-auto"
                            xmlns="http://www.w3.org/2000/svg" width="19.092"
                            height="19.092" viewBox="0 0 19.092 19.092">
                            <g transform="translate(-950.954 -1943.454)">
                                <line x1="23"
                                    transform="translate(952.368 1944.868) rotate(45)"
                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="23"
                                    transform="translate(952.368 1961.132) rotate(-45)"
                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></line>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="options__sub-label">
                <p class="typography--xsmall">Introduce tu segundo apellido</p>
            </div>
        </div>
        {{-- Email --}}
        <div class="options__item">
            <label for="email">{{ __('Email') }}</label>
            <div class="line-row-between">
                <div class="options__input-container">
                    <input data-rule="required|email" class="options__input" type="text" value="{{ auth()->user()->email }}" name="email"
                        placeholder="{{ __('nombre@email.com') }}">
                    <button class="options__close-btn" type="button">
                        <svg class="icon-xsmall mx-auto"
                            xmlns="http://www.w3.org/2000/svg" width="19.092"
                            height="19.092" viewBox="0 0 19.092 19.092">
                            <g transform="translate(-950.954 -1943.454)">
                                <line x1="23"
                                    transform="translate(952.368 1944.868) rotate(45)"
                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="23"
                                    transform="translate(952.368 1961.132) rotate(-45)"
                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></line>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="options__sub-label">
                <p class="typography--xsmall">Introduce tu email</p>
            </div>
        </div>
        {{-- Teléfono móvil --}}
        <div class="options__item">
            <label for="phone">{{ __('Teléfono móvil') }}</label>
            <div class="line-row-between">
                <div class="options__input-container">
                    <input data-rule="required" class="options__input" type="number" value="{{ auth()->user()->phone }}" name="phone"
                        placeholder="666 666 666">
                    <button class="options__close-btn" type="button">
                        <svg class="icon-xsmall mx-auto"
                            xmlns="http://www.w3.org/2000/svg" width="19.092"
                            height="19.092" viewBox="0 0 19.092 19.092">
                            <g transform="translate(-950.954 -1943.454)">
                                <line x1="23"
                                    transform="translate(952.368 1944.868) rotate(45)"
                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="23"
                                    transform="translate(952.368 1961.132) rotate(-45)"
                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></line>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="options__sub-label">
                <p class="typography--xsmall">Introduce tu teléfono móvil</p>
            </div>
        </div>
        {{-- GUARDAR CAMBIOS --}}
        <div class="margin-bottom--medium">
            <div id="status" class="message-form"></div>
            <button class="options__save-btn">
                {{ __('GUARDAR CAMBIOS') }}
            </button>
        </div>
    </div>
</form>

@push('scripts')
    <script>
        window.addEventListener("DOMContentLoaded", function () {
            // get the form elements defined in your form HTML above
            var form = document.getElementById("form-my-account");
            // var button = document.getElementById("my-form-button");
            var status = document.getElementById("status");

            // Success and Error functions for after the form is submitted
            function success(response, responseType) {
                try {
                    const parse = JSON.parse(response);
                    document.getElementById('full-name-profile').innerHTML = parse.user.name + ' ' + parse.user.lastname;
                } catch (error) {
                    console.error(error);
                }
                form.reset();
                form.classList.remove('loading');
                status.classList.add("success");
                status.innerHTML = "Datos actualizados";
            }

            function error() {
                form.classList.remove('loading');
                status.classList.add("error");
                status.innerHTML = "¡UPS! Hay un problema.";
            }

            // handle the form submission event
            form.addEventListener("submit", function (ev) {
                ev.preventDefault();
                status.innerHTML = "";
                try {
                    status.classList.remove("error");
                    status.classList.remove("success");
                } catch (error) {}
                var data = new FormData(form);
                form.classList.add('loading');
                ajax(form.method, form.action, data, success, error);
            });
        });

        // helper function for sending an AJAX request
        function ajax(method, url, data, success, error) {
            var xhr = new XMLHttpRequest();
            xhr.open(method, url);
            xhr.setRequestHeader("Accept", "application/json");
            xhr.onreadystatechange = function () {
                if (xhr.readyState !== XMLHttpRequest.DONE)
                    return;
                if (xhr.status === 200) {
                    success(xhr.response, xhr.responseText);
                } else {
                    error(xhr.status, xhr.response, xhr.responseType);
                }
            };
            xhr.send(data);
        }
    </script>
@endpush
