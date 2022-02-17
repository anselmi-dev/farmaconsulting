@extends('layouts.app')

@section('nav-icon')
    <a href="{{ route('home') }}">
        @includeIf('layouts.icons.back')
    </a>
@endsection

@section('content')
    <div id="app" class="url-content bg-base">
        <div class="overflow-hidden">
            <div class="relative py-10">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <div class="text-center">
                        <h1 class="text-2xl md:text-4xl font-bold text-white">
                            <span class="block">
                                @yield('landing-page-tile')
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
            
            @component('components.vimeo', ['src' => View::getSection('landing-page-src'), 'key' => 12])
            @endcomponent
        </div>
    </div>
@endsection
