@extends('layouts.auth')

@section('content')
    @if(Session::has('success'))
        <div x-data="{ isShowing: true }" class="fixed top-0 left-0 z-20 text-white w-full text-center bg-gray-600 uppercase p-2 opacity-80">
            <div x-show="isShowing" class="px-5">
                {{ Session::get('success') }}
            </div>
            <button @click="isShowing = false" class="absolute top-0 bottom-0 my-auto right-2">X</button>
        </div>
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
                <div class="margin-bottom--4xlarge">
                    <form method="POST" action="{{ route('reset-password.post') }}" class="line-col-center register-form">
                        @csrf
                        <div class="margin-bottom--xsmall w-full">
                            <label class="typography--small typography--white" for="user">Usuario</label>
                            <input class="mt-2" type="email" required name="email" value="{{ old('email') }}" placeholder="{{ __('Correo electrónico') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="w-full margin-bottom--2xlarge">
                            <button class="btn--primary">RECUPERAR CONTRASEÑA</button>
                        </div>

                        <div class="margin-bottom--2xlarge">
                            <a href="{{ route('login.xml') }}" class="typography--white">Iniciar sesión</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection