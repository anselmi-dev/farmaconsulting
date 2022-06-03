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
            <div class="relative my-4 lg:py-10">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <div class="text-center">
                        <h1 class="font-bold text-white">
                            <span class="block text-2xl lg:text-4xl leading-tight">
                                @yield('landing-page-tile')
                            </span>
                        </h1>
                        <hr class="my-5 block">
                    </div>
                </div>
            </div>
            @foreach ($videos as  $key => $video)
                @php
                    $title = isset($video['title']) ? $video['title'] : null;
                    $subtitle = isset($video['subtitle']) ? $video['subtitle'] : null;
                @endphp
                @component('components.vimeo', [
                    'src'      => $video['vimeo'],
                    'key'      => $key,
                    'title'    => $title,
                    'subtitle' => $subtitle
                ])
                @endcomponent
            @endforeach
        </div>
    </div>
@endsection

