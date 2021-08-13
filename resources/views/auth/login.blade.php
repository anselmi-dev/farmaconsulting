@extends('layouts.auth')

@section('content')
    @if (!$errors->any())
        @includeIf('components.swiper')
    @endif
    <div class="min-h-screen bg-purple-400 flex justify-center items-center relative overflow-hidden">
        <div class="absolute w-60 h-60 rounded-xl bg-purple-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
        </div>
        <div class="absolute w-48 h-48 rounded-xl bg-purple-300 -bottom-6 -right-10 transform rotate-12 hidden md:block">
        </div>
        <form method="POST" action="{{ route('login.xml') }}" class="py-12 my-10 px-12 bg-white rounded-2xl shadow-xl z-20">
            @csrf
            <div>
                <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Create An Account</h1>
                <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Create an
                    account to enjoy all the services without any ads for free!</p>
            </div>
            <div class="space-y-4">
                <input type="email" required name="email" value="{{ old('email') }}"  placeholder="{{ __('Correo electrónico') }}"
                    class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="text" required name="password" value="{{ old('password') }}" placeholder="{{ __('Contraseña') }}"
                    class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="text" required name="catalogue" value="{{ old('catalogue') }}" placeholder="{{ __('Código catálogo') }}"
                    class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                @error('cataloge')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="text-center mt-6">
                <button class="py-3 w-full text-xl text-white bg-purple-400 rounded-2xl">{{ __('Entrar') }}</button>
            </div>

            <div class="mt-6">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </form>
        <div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
        <div class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
        </div>
    </div>

@endsection
