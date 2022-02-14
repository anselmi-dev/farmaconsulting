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

            {{-- @foreach ($videos as  $key => $video)
            @php
                $title = isset($video['title']) ? $video['title'] : null;
            @endphp
            @component('components.vimeo', ['src' => $video['vimeo'], 'key' => $key, 'title' => $title])
            @endcomponent
        @endforeach --}}
            @foreach ($videos as  $key => $video)
                <div @class([
                        'w-full mx-auto',
                        'div-screen-'.$key
                    ])>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 pb-10">
                        @isset($video['title'])
                            <div class="text-4xl text-center text-white text-white mt-10 mb-1">
                                {{ $video['title'] }}
                            </div>
                        @endisset
                        <div class="relative" style="padding:56.25% 0 0 0;">
                            <iframe id="video-player"
                                class="top-0 absolute left-0 w-full h-full bg-gray-800"
                                src="{{ $video['vimeo'] }}"
                                videoframeborder="0"
                                allow="autoplay; fullscreen; picture-in-picture"
                                frameborder="0"
                                webkitallowfullscreen
                                mozallowfullscreen
                                allowfullscreen 
                                allow="autoplay">
                            </iframe>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection