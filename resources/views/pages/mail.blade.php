@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('contact') }}" class="text-primary">Contacto</a>/<span>Cuéntanos tu consulta</span>
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
                <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="35.087" height="26.063"
                    viewBox="0 0 35.087 26.063">
                    <g transform="translate(-194.907 -10.94)">
                        <path
                            d="M228.994,11.94V32.994A3.016,3.016,0,0,1,225.985,36H198.916a3.017,3.017,0,0,1-3.009-3.009V11.94"
                            fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        <path d="M228.994,11.94,214.22,24.189a3.008,3.008,0,0,1-3.538,0L195.907,11.94Z" fill="none"
                            stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        <line x2="33.087" transform="translate(195.907 11.94)" fill="none" stroke="#A2BD30"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </g>
                </svg>
            </div>
            <div class="text-center">
                <div class="margin-bottom--xlarge">
                    <h2 class="typography--green">¿Quieres comprar una farmacia? ¿Quieres vender una farmacia?</h2>
                </div>
                <div class="">
                    <p>Nos pondremos en contacto contigo lo antes posible para ofrecerte las mejores ofertas en compra y
                        venta de farmacias en España.</p>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="margin-bottom--4xlarge">
                <form name="demo-form-1" id="form-consultation" method="POST" action="{{ route('contact-consultation') }}"
                    class="line-col-center mail-form">
                    @csrf
                    {{-- Name --}}
                    <div class="margin-bottom--2xsmall w-full form-group">
                        <label class="typography--small" for="name">Nombre</label>
                        <input class="mt-1" type="text" name="name"
                            value="{{ auth()->user()->name }}" placeholder="Nombre auto completado">
                        <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                    </div>
                    {{-- Lastaname --}}
                    <div class="margin-bottom--2xsmall w-full form-group">
                        <label class="typography--small" for="lastname">Apellidos</label>
                        <input class="mt-1" type="text" name="lastname"
                            value="{{ auth()->user()->lastname }}" placeholder="Apellidos auto completados">
                        <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                    </div>
                    {{-- Email --}}
                    <div class="margin-bottom--2xsmall w-full form-group">
                        <label class="typography--small" for="email">Email</label>
                        <input data-rule="required" class="mt-1" type="email" name="email"
                            value="{{ auth()->user()->email }}" placeholder="nombre@email.com" readonly>
                        <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                    </div>
                    {{-- Phone --}}
                    <div class="margin-bottom--2xsmall w-full form-group">
                        <label class="typography--small" for="phone">Teléfono móvil</label>
                        <input data-rule="required" class="mt-1" type="number" name="phone"
                            value="{{ auth()->user()->phone }}" placeholder="Móvil auto completado">
                        <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                    </div>
                    {{-- Providencia --}}
                    <div class="margin-bottom--2xsmall w-full form-group">
                        <label class="typography--small" for="phone">Provincia</label>
                        <div class="custom-select__container">
                            <div class="line-row-between">
                                <div class="custom-select__subtitle">
                                    <p class="typography--dark-green">
                                        {{ __('Provincia') }}
                                    </p>
                                </div>
                                <div class="custom-select__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25"
                                        viewBox="0 0 14.012 8.25">
                                        <path d="M246.5,251.685l5.836-5.592L246.5,240.5"
                                            transform="translate(253.099 -245.085) rotate(90)" fill="none" stroke="#e8e8e8"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        {{-- Province --}}
                        <div class="custom-select__options-container">
                            <div class="custom-select__options-subtitle">
                                <p class="typography--small">
                                    {{ __('Selecciona las provincias que te interesen') }}
                                </p>
                            </div>
                            <ul>
                                @foreach (\App\Models\Province::all() as $province)
                                    <li>
                                        <label class="custom-select__option" for="province_{{ $province->id }}">
                                            <span class="uppercase">
                                                {{ $province->name }}
                                            </span>
                                            <input type="radio" name="province" id="province_{{ $province->id }}"
                                                value="{{ $province->id }}" class="custom-select__option-input">
                                            <span class="custom-select__option-check">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12.362" height="8.25"
                                                    viewBox="0 0 12.362 8.25">
                                                    <path d="M248.916,250.037l3.419-3.945L246.5,240.5"
                                                        transform="translate(251.448 -245.085) rotate(90)" fill="none"
                                                        stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round"
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

                    {{-- Interesting --}}
                    <div class="margin-bottom--3xsmall w-full form-group">
                        <div class="margin-bottom--small">
                            <p class="typography--small">Interesado/a en*</p>
                        </div>
                        <div class="margin-bottom--small">
                            <label for="interested_Comprar" class="custom-radio-btn__container">Comprar Farmacia
                                <input type="radio" name="interested" id="interested_Comprar" value="Comprar Farmacia">
                                <span class="custom-radio-btn__item"></span>
                            </label>
                        </div>
                        <div class="margin-bottom--small">
                            <label for="interested_Vender" class="custom-radio-btn__container">Vender Farmacia
                                <input type="radio" name="interested" id="interested_Vender" value="Vender Farmacia">
                                <span class="custom-radio-btn__item"></span>
                            </label>
                        </div>
                        <div class="margin-bottom--small">
                            <label for="interested_Otros" class="custom-radio-btn__container">Otros
                                <input type="radio" name="interested" id="interested_Otros" value="Otros">
                                <span class="custom-radio-btn__item"></span>
                            </label>
                        </div>
                        <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                    </div>

                    {{-- Message --}}
                    <div class="margin-bottom--medium w-full form-group">
                        <label for="message" class="typography--small">Tu consulta</label>
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
                                            transform="translate(251.448 -245.085) rotate(90)" fill="none" stroke="#a2bd30"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </svg>
                                </span>
                                <span class="typography--small">He leído y acepto los
                                    <a href="{{ route('terms') }}" class="typography--links">Términos de uso</a> y 
                                    <a href="{{ route('politica-privacidad') }}" class="typography--links">Política de Privacidad</a>
                                </span>
                            </label>
                        </div>
                        <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                    </div>
                    {{-- Status --}}
                    <div class="text-center w-full" id="status-consultation"></div>
                    <div class="w-full">
                        <button class="btn--primary">ENVIAR</button>
                    </div>
                </form>
            </div>
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
                        minimum: 3,
                        message: 'El mensaje es demasiado corto (mínimo 3 caracteres)'
                    }
                },
                terms: {
                    presence: {
                        message: '^Campo obligatorio',
                    },
                },
                interested: {
                    presence: {
                        message: '^Campo obligatorio',
                    },
                },
                province: {
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
                },
                email: {
                    presence: {
                        message: '^Campo obligatorio',
                    },
                    email: true
                },
                // phone: {
                //     presence: {
                //         message: '^Campo obligatorio',
                //     }
                // }
            };
            const form = document.querySelector('form[name="demo-form-1"]');

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
