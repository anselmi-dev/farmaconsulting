@extends('layouts.auth')

@section('content')
    @if (!$errors->any())
        @includeIf('layouts.parts.intro')
    @endif
    @if(Session::has('errors'))
        <div x-data="{ isShowing: true }" class="fixed top-0 left-0 z-20 text-white w-full text-center bg-red-600 uppercase p-2 opacity-80">
            <div x-show="isShowing" class="px-5">
                {{ Session::get('errors')->first() }}
            </div>
            <button @click="isShowing = false" class="absolute top-0 bottom-0 my-auto right-2">X</button>
        </div>
    @endif

    <div
        style="background-image: url({{ asset('images/backgrounds/intro-slider-1.jpg') }})"
        class="min-h-screen bg-green-400 flex justify-center items-center relative overflow-hidden bg-cover bg-center">
        <div class="z-0 bg-gray-900 absolute top-0 right-0 w-full h-full bg-gradiente-primary opacity-60"></div>
        <div class="wrapper--larger z-10">
            <div class="line-col-center mt-16">
                <div class="margin-bottom--2xlarge">
                    <img class="mx-auto" src="{{ asset('images/logos/logo-secondary-white.png') }}" alt="Farmaconsulting secondary logo">
                </div>
                <div class="margin-bottom--4xlarge px-4">
                    <p class="typography--regular typography--white text-center">
                        Para acceder a nuestros contenidos personalizados para ti tienes que rellenar estos campos. El código de catálogo lo puedes encontrar en la página 3 del catálogo que acabas de recibir.
                    </p>
                </div>
                <div class="margin-bottom--4xlarge">
                    @php
                        $rollback = request('rollback');
                        $rollback = $rollback ? '?rollback='.$rollback : NULL;
                    @endphp
                    <form method="POST" action="{{ route('login.xml') }}{{ $rollback }}" class="line-col-center register-form">
                        @csrf
                        <div class="margin-bottom--xsmall w-full">
                            <label class="typography--small typography--white" for="user">Usuario</label>
                            <input value="ismael@martinezgomez.es" class="mt-2" type="email" required name="email" value="{{ old('email') }}" placeholder="{{ __('Correo electrónico') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="margin-bottom--xsmall w-full">
                            <label class="typography--small typography--white" for="password">Contraseña</label>
                            <input value="ABC113355" class="mt-2" type="password" required name="password" value="{{ old('password') }}" placeholder="{{ __('Contraseña') }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{--
                        <div class="margin-bottom--xsmall w-full">
                            <label class="typography--small typography--white" for="catalog">Código de catálogo</label>
                            <input class="mt-2" type="text" name="catalogue" value="{{ old('catalogue') }}" placeholder="{{ __('Código catálogo') }}">
                            @error('cataloge')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        --}}
                        <div class="margin-bottom--3xlarge w-full">
                            <div class="line-row">
                                <label for="save-data" class="custom-checkbox__container">
                                    <input type="checkbox" name="save-data">
                                    <span class="custom-checkbox__item"></span>
                                    <span class="custom-checkbox__check">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12.362" height="8.25" viewBox="0 0 12.362 8.25">
                                            <path d="M248.916,250.037l3.419-3.945L246.5,240.5" transform="translate(251.448 -245.085) rotate(90)" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                          </svg>
                                    </span>
                                    <span class="typography--small typography--white">Guardar datos para futuros inicios de sesión</span>
                                </label>
                            </div>
                        </div>
                        <div class="margin-bottom--large">
                            <div class="line-col-center">
                                <div class="margin-bottom--small text-center">
                                    <span class="typography--small typography--white">Registrándote en esta app aceptas nuestros</span><br />
                                    <a href="https://www.farmaconsulting.es/politica-privacidad/" target="_blank" class="typography--small typography--links">Términos y Condiciones</a>
                                </div>
                                <div class="line-row">
                                    <label for="terms" class="custom-checkbox__container">
                                        <input type="checkbox" name="terms" required {{ old('terms') ? 'checked' : NULL }}>
                                            <span class="custom-checkbox__item"></span>
                                            <span class="custom-checkbox__check">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12.362" height="8.25" viewBox="0 0 12.362 8.25">
                                                    <path d="M248.916,250.037l3.419-3.945L246.5,240.5" transform="translate(251.448 -245.085) rotate(90)" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                </svg>
                                            </span>
                                            <span class="typography--small typography--white">he leído y acepto</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="margin-bottom--2xlarge">
                            <a href="#" class="typography--small typography--links">Recuperar contraseña</a>
                        </div>
                        <div class="w-full">
                            <button class="btn--inactive-primary">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
