@extends('layouts.auth')

@section('content')
    @if (!$errors->any() && !Session::has('success'))
        @includeIf('layouts.parts.intro')
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
                        Para acceder a nuestros contenidos personalizados para tí, tienes que iniciar sesión rellenando los campos de usuario y contraseña.
                    </p>
                </div>
                <div class="margin-bottom--4xlarge">
                    @php
                        $rollback = request('rollback');
                        $rollback = $rollback ? '?rollback='.$rollback : NULL;
                        $cookie = \Cookie::get('auth_attempt');
                        $email = null;
                        $password = null;
                        try {
                            if ($cookie) {
                                $cookie = explode('_@_', $cookie);
                                $email = $cookie[0];
                                $password = $cookie[1];
                            }
                        } catch (\Throwable $th) {
                        }
                    @endphp
                    <form method="POST" action="{{ route('login.xml') }}{{ $rollback }}" class="line-col-center register-form">
                        @csrf
                        <div class="margin-bottom--xsmall w-full">
                            <label class="typography--small typography--white" for="user">Usuario</label>
                            <input class="mt-2" type="email" required name="email" id="email" value="{{ old('email', $email) }}" placeholder="{{ __('Correo electrónico') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="margin-bottom--xsmall w-full">
                            <label class="typography--small typography--white" for="password">Contraseña</label>
                            <input class="mt-2" type="password" required name="password" id="password" value="{{ old('password', $password) }}" placeholder="{{ __('Contraseña') }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="margin-bottom--3xlarge w-full">
                            <div class="line-row">
                                <label for="remember" class="custom-checkbox__container">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : NULL }}>
                                    <span class="custom-checkbox__item"></span>
                                    <span class="custom-checkbox__check">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12.362" height="8.25" viewBox="0 0 12.362 8.25">
                                            <path d="M248.916,250.037l3.419-3.945L246.5,240.5" transform="translate(251.448 -245.085) rotate(90)" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                          </svg>
                                    </span>
                                    <span class="typography--white">Recordar los datos en este dispositivo</span>
                                </label>
                            </div>
                        </div>
                        <div class="margin-bottom--large">
                            <div class="line-col-center">
                                {{-- <div class="margin-bottom--small text-center">
                                    <span class="typography--white">Registrándote en esta app aceptas nuestros</span><br />
                                    <a href="https://www.farmaconsulting.es/politica-privacidad/" target="_blank" class="typography--links">Términos y Condiciones</a>
                                </div> --}}
                                <div class="line-row flex-wrap">
                                    <label for="terms" class="custom-checkbox__container mb-0">
                                        <input type="checkbox" name="terms" class="mb-0" required {{ old('terms') ? 'checked' : NULL }}>
                                            <span class="custom-checkbox__item"></span>
                                            <span class="custom-checkbox__check">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12.362" height="8.25" viewBox="0 0 12.362 8.25">
                                                    <path d="M248.916,250.037l3.419-3.945L246.5,240.5" transform="translate(251.448 -245.085) rotate(90)" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                </svg>
                                            </span>
                                            <span class="typography--white">He leído y acepto</span>&nbsp;
                                    </label>
                                    <a href="{{ route('terms') }}" class="typography--links">Términos y Condiciones</a>
                                </div>
                            </div>
                        </div>

                        <div class="margin-bottom--2xlarge">
                            <a href="{{ route('reset-password.index') }}" class="typography--links">Recuperar contraseña</a>
                        </div>

                        <div class="w-full">
                            <button class="btn--primary">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
