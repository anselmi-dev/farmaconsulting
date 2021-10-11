@extends('layouts.app')

@section('content')

    <div class="main__container">
        <div class="wrapper--larger">
            <div class="margin-bottom--xlarge">
                <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="35.087" height="26.063" viewBox="0 0 35.087 26.063">
                    <g transform="translate(-194.907 -10.94)">
                      <path d="M228.994,11.94V32.994A3.016,3.016,0,0,1,225.985,36H198.916a3.017,3.017,0,0,1-3.009-3.009V11.94" fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                      <path d="M228.994,11.94,214.22,24.189a3.008,3.008,0,0,1-3.538,0L195.907,11.94Z" fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                      <line x2="33.087" transform="translate(195.907 11.94)" fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </g>
                </svg>
            </div>
            <div class="text-center">
                <div class="margin-bottom--xlarge">
                    <h2 class="typography--green">¿Quieres comprar una farmacia? ¿Quieres vender una farmacia?</h2>
                </div>
                <div class="">
                    <p>Nos pondremos en contacto contigo lo antes posible para ofrecerte las mejores ofertas en compra y venta de farmacias en España.</p>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="margin-bottom--4xlarge">
                <form id="form-consultation" method="POST" action="{{ route('contact-consultation') }}" class="line-col-center mail-form">
                    @csrf
                    {{-- Name --}}
                    <div class="margin-bottom--2xsmall w-full">
                        <label class="typography--small" for="name">Nombre</label>
                        <input class="mt-1 field--active" type="text" name="name" value="{{ auth()->user()->name }}" placeholder="Nombre auto completado" readonly>
                    </div>
                    {{-- Lastaname --}}
                    <div class="margin-bottom--2xsmall w-full">
                        <label class="typography--small" for="lastname">Apellidos</label>
                        <input class="mt-1 field--active" type="text" name="lastname" value="{{ auth()->user()->lastname }}" placeholder="Apellidos auto completados" readonly>
                    </div>
                    {{-- Email --}}
                    <div class="margin-bottom--2xsmall w-full">
                        <label class="typography--small" for="email">Email</label>
                        <input class="mt-1 field--active" type="email" name="email" value="{{ auth()->user()->email }}" placeholder="nombre@email.com" readonly>
                    </div>
                    {{-- Phone --}}
                    <div class="margin-bottom--2xsmall w-full">
                        <label class="typography--small" for="phone">Teléfono móvil</label>
                        <input class="mt-1 field--active" type="number" name="phone" value="{{ auth()->user()->phone }}" placeholder="Móvil auto completado" readonly>
                    </div>
                    {{-- Providencia --}}
                    <div class="margin-bottom--2xsmall w-full">
                        <div class="custom-select__container">
                            <div class="line-row-between">
                                <div class="custom-select__subtitle">
                                    <p class="typography--dark-green">
                                        {{ __('Provincia') }}
                                    </p>
                                </div>
                                <div class="custom-select__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.012"
                                        height="8.25" viewBox="0 0 14.012 8.25">
                                        <path d="M246.5,251.685l5.836-5.592L246.5,240.5"
                                            transform="translate(253.099 -245.085) rotate(90)"
                                            fill="none" stroke="#e8e8e8" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"></path>
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
                                            <input
                                                type="radio"
                                                name="province"
                                                id="province_{{ $province->id }}"
                                                value="{{ $province->id }}"
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
                    </div>

                    {{-- Interesting --}}
                    <div class="margin-bottom--3xsmall w-full">
                        <div class="margin-bottom--small">
                            <p class="typography--small">Interesado/a en*</p>
                        </div>
                        <div class="margin-bottom--small">
                            <label for="interested_Comprar" class="custom-radio-btn__container">Comprar Farmacia
                                <input type="radio" name="interested" id="interested_Comprar">
                                <span class="custom-radio-btn__item"></span>
                            </label>
                        </div>
                        <div class="margin-bottom--small">
                            <label for="interested_Vender" class="custom-radio-btn__container">Vender Farmacia
                                <input type="radio" name="interested" id="interested_Vender">
                                <span class="custom-radio-btn__item"></span>
                            </label>
                        </div>
                        <div class="margin-bottom--small">
                            <label for="interested_Otros" class="custom-radio-btn__container">Otros
                                <input type="radio" name="interested" id="interested_Otros">
                                <span class="custom-radio-btn__item"></span>
                            </label>
                        </div>
                    </div>
                    {{-- Message --}}
                    <div class="margin-bottom--medium w-full">
                        <label for="message" class="typography--small">Tu consulta</label>
                        <textarea class="mt-1" name="message" cols="30" rows="8" placeholder="Cómo podemos ayudarte..."></textarea>
                    </div>
                    {{-- Terms --}}
                    <div class="margin-bottom--medium w-full">
                        <div class="line-row">
                            <label for="save-data" class="custom-checkbox__container">
                                <input type="checkbox" name="save-data">
                                <span class="custom-checkbox__item"></span>
                                <span class="custom-checkbox__check">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.362" height="8.25" viewBox="0 0 12.362 8.25">
                                        <path d="M248.916,250.037l3.419-3.945L246.5,240.5" transform="translate(251.448 -245.085) rotate(90)" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                      </svg>
                                </span>
                                <span class="typography--small">He leído y acepto los <a href="https://www.farmaconsulting.es/terminos-uso/" target="_blank" class="typography--links">Términos de uso</a> y <a href="https://www.farmaconsulting.es/politica-privacidad/" target="_blank" class="typography--links">Política de Privacidad</a></span>
                            </label>
                        </div>
                    </div>
                    {{-- Status --}}
                    <div class="text-center w-full" id="status-consultation"></div>
                    <div class="w-full">
                        <button class="btn--inactive-primary">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>

        window.addEventListener("DOMContentLoaded", function () {
            // get the form elements defined in your form HTML above

            var form = document.getElementById("form-consultation");
            // var button = document.getElementById("my-form-button");
            var status = document.getElementById("status-consultation");

            // Success and Error functions for after the form is submitted
            function success(response, responseType) {
                form.reset();
                status.classList.add("success");
                myNotification({
                    message: "Mensaje enviado"
                });
                status.innerHTML = "Mensaje enviado";
            }

            function error() {
                status.classList.add("error");
                status.innerHTML = "¡Ups! Ocurrió un problema";
            }

            // handle the form submission event
            form.addEventListener("submit", function (ev) {
                ev.preventDefault();
                status.innerHTML = "";
                try {
                    status.classList.remove("error");
                    status.classList.success("error");
                } catch (error) {}
                var data = new FormData(form);
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
