@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('contact') }}" class="text-primary">Contacto</a>/<span>Nosostros te llamamos</span>
@endsection

@section('nav-icon')
    <a href="{{ route('contact') }}">
        @includeIf('layouts.icons.back')
    </a>
@endsection

@section('content')
    <div class="main__container">
        <div class="wrapper--larger">
            <div class="margin-bottom--xlarge">
                <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                    <g transform="translate(-62.1)">
                        <rect width="48" height="48" transform="translate(62.1)" fill="none" />
                        <path d="M67.287,9.567" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2.055" />
                        <g>
                            <path
                                d="M69.114,10.906a3.024,3.024,0,0,0-.137,2A36.822,36.822,0,0,0,79.164,32.472,35.858,35.858,0,0,0,98.676,42.609a3.159,3.159,0,0,0,2-.139.979.979,0,0,0,.482-.607l1.209-5.41a1.457,1.457,0,0,0-.456-1.331c-.184-.184-4.283-1.664-6.221-2.611A1.629,1.629,0,0,0,93.574,33l-.753,1.3a1.915,1.915,0,0,1-1.179.888c-1.9.479-7.766-4.924-9.042-6.2-1.321-1.322-6.907-7.334-6.423-9.23a1.9,1.9,0,0,1,.889-1.18c1.13-.655.824-.478,1.283-.746a1.63,1.63,0,0,0,.5-2.122,33.234,33.234,0,0,1-1.888-5.2,1.694,1.694,0,0,0-1.812-1.29s-.093.022-5.439,1.216A.975.975,0,0,0,69.114,10.906Z"
                                fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                            <path d="M85.619,13.677A10.693,10.693,0,0,1,96.312,24.37" fill="none" stroke="#A2BD30"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <path d="M85.619,9.147A15.225,15.225,0,0,1,100.844,24.37" fill="none" stroke="#A2BD30"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="text-center">
                <div class="margin-bottom--xlarge">
                    <h2 class="typography--green">¿Quieres que te llamemos nosotros?</h2>
                </div>
                <div class="">
                    <p>Nos pondremos en contacto contigo lo antes posible para asesorarte acerca de la compra o venta de farmacias en España o de cualquier tema relacionado con la gestión patrimonial de tu farmacia.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="margin-bottom--4xlarge">
            <form method="POST" action="{{ route('contact-general') }}" name="form-general" class="line-col-center callback-form">
                @csrf
                {{-- Name --}}
                <div class="margin-bottom--2xsmall w-full form-group">
                    <label class="typography--small" for="name">Nombre</label>
                    <input class="mt-1 field--active" type="text" name="name" placeholder="Nombre auto completado" value="{{ auth()->user()->name }}" readonly>
                    <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                </div>
                {{-- lastname --}}
                <div class="margin-bottom--2xsmall w-full form-group">
                    <label class="typography--small" for="lastname">Apellido</label>
                    <input class="mt-1 field--active" type="text" name="lastname" placeholder="Apellidos auto completados" value="{{ auth()->user()->lastname }}" readonly>
                    <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                </div>
                {{-- Phone --}}
                <div class="margin-bottom--2xsmall w-full form-group">
                    <label class="typography--small" for="phone">Teléfono móvil</label>
                    <input class="mt-1 field--active" type="number" name="phone" value="{{ auth()->user()->phone }}" readonly>
                    <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                </div>
                {{-- Franja horaria --}}
                <div class="margin-bottom--2xsmall w-full form-group">
                    <div class="margin-bottom--4xsmall">
                        <p class="typography--small">Franja horaria</p>
                    </div>
                    <div class="custom-select__selected">
                        <span class="typography--green">09:00 - 13:00</span>
                    </div>
                    <div class="custom-select__container">
                        <div class="line-row-between">
                            <div class="custom-select__subtitle">
                                <p class="typography--dark-green">Preferencia de franja horaria</p>
                            </div>
                            <div class="custom-select__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25"
                                    viewBox="0 0 14.012 8.25">
                                    <path d="M246.5,251.685l5.836-5.592L246.5,240.5"
                                        transform="translate(253.099 -245.085) rotate(90)" fill="none"
                                        stroke="#e8e8e8" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="custom-select__options-container">
                        <div class="custom-select__options-subtitle">
                            <p class="typography--small">Selecciona la franja horaria que te interese</p>
                        </div>
                        @php
                            $timezones = [0 => '08:30 - 11:00', 1 => '11:00 - 14:00', 2 => '16:00 - 19:00'];
                        @endphp
                        <ul>
                            @foreach ($timezones as $key => $timezone)
                                <li>
                                    <label for="timezone_{{ $key }}" class="custom-select__option">
                                        <span class="uppercase">{{ $timezone }}</span>
                                        <input
                                            type="checkbox"
                                            name="timezone"
                                            id="timezone_{{ $key }}"
                                            value="{{ $key }}"
                                            class="custom-select__option-input">
                                        <span class="custom-select__option-check">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12.362"
                                            height="8.25" viewBox="0 0 12.362 8.25">
                                                <path d="M248.916,250.037l3.419-3.945L246.5,240.5"
                                                transform="translate(251.448 -245.085) rotate(90)"
                                                    fill="none" stroke="#a2bd30"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                </div>
                {{-- Message --}}
                <div class="margin-bottom--medium w-full form-group">
                    <label for="message" class="typography--small">
                        {{ __('Tu consulta') }}
                    </label>
                    <textarea class="mt-1" name="message" cols="30" rows="8" placeholder="Cómo podemos ayudarte..."></textarea>
                    <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                </div>
                {{-- Terms --}}
                <div class="margin-bottom--medium w-full form-group">
                    <div class="line-row">
                        <label for="terms" class="custom-checkbox__container">
                            <input type="checkbox" name="terms" value="true">
                            <span class="custom-checkbox__item"></span>
                            <span class="custom-checkbox__check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.362" height="8.25"
                                    viewBox="0 0 12.362 8.25">
                                    <path d="M248.916,250.037l3.419-3.945L246.5,240.5"
                                        transform="translate(251.448 -245.085) rotate(90)" fill="none"
                                        stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <span class="typography--small">He leído y acepto los <a
                                    href="https://www.farmaconsulting.es/terminos-uso/" target="_blank"
                                    class="typography--links">Términos de uso</a> y <a
                                    href="https://www.farmaconsulting.es/politica-privacidad/" target="_blank"
                                    class="typography--links">Política de Privacidad</a></span>
                        </label>
                    </div>
                    <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                </div>
                <div class="message-form" id="from-general__status"></div>
                <div class="w-full">
                    <button class="btn--inactive-primary">
                        {{ __('ENVIAR') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        (function() {
            const constraints = {
                message: {
                    presence: {
                        message: '^Campo obligatorio',
                    },
                    length: {
                        minimum: 3
                    }
                },
                timezone: {
                    presence: {
                        message: '^Campo obligatorio',
                    }
                },
                terms: {
                    presence: {
                        message: '^Campo obligatorio',
                    },
                },
                name: {
                    presence: {
                        message: '^Campo obligatorio',
                    },
                },
                lastname: {
                    presence: {
                        message: '^Campo obligatorio',
                    },
                }
            };
            const form = document.querySelector('form[name="form-general"]');

            form.addEventListener("submit", function(ev) {
                ev.preventDefault();
                handleFormSubmit(form, ajaxForm, constraints);
            });

            // Hook up the inputs to validate on the fly
            var inputs = form.querySelectorAll('input, textarea, select');
            for (var i = 0; i < inputs.length; ++i) {
                inputs.item(i).addEventListener("change", function(ev) {
                    var errors = validate(form, constraints) || {};
                    showErrorsForInput(this, errors[this.name])
                });
            }
        })();
    </script>
@endpush
