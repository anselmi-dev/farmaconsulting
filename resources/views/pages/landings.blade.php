@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Inicio</a>/<span>Landings</span>
@endsection

@section('nav-icon')
    <a href="{{ route('contact') }}">
        @includeIf('layouts.icons.back')
    </a>
@endsection

@section('content')
    <div class="main__container">
        <div class="wrapper">
            <div class="margin-bottom--4xlarge">
                <div class="mb-2">
                    <h1 class="text-2xl font-bold">
                        ({{ count($views) }}) Landings
                    </h1>
                </div>
                <div class="flex flex-col space-y-1">
                    @foreach ($views as $view)
                    @php
                        $code =  str_replace('.blade.php', '', $view);
                        @endphp
                    <a href="{{ route('landing', $code) }}" class="w-full p-2 border border-gray-100 flex items-center justify-between">
                        <span>
                            <span class="text-gray-400">Código-</span><strong class="text-primary font-bold">{{ $code }}</strong>
                        </span>
                        <span class="text-primary font-bold">
                            >
                        </span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection