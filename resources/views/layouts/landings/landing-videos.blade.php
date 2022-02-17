@extends('layouts.app')

@section('nav-icon')
    <a href="{{ route('home') }}">
        @includeIf('layouts.icons.back')
    </a>
@endsection

@php
    $videos = isset($videos) ? $videos : [];
@endphp

@section('content')
    <div id="app" class="url-content bg-base">
        <div class="overflow-hidden">
            <div class="relative py-10">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-white">
                            <span class="block text-4xl">
                                @yield('landing-page-tile')
                            </span>
                        </h1>
                    </div>
                </div>
            </div>

            @foreach ($videos as  $key => $video)
                @php
                    $title = isset($video['title']) ? $video['title'] : null;
                @endphp
                @component('components.vimeo', ['src' => $video['vimeo'], 'key' => $key, 'title' => $title])
                @endcomponent
            @endforeach
        </div>
    </div>
@endsection

