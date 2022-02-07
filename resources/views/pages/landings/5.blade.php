@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Vídeo Carolina García</span>
@endsection

@section('nav-icon')
    <a href="{{ route('home') }}">
        @includeIf('layouts.icons.back')
    </a>
@endsection

@section('content')
<div class="url-content bg-base">
        <div class="relative overflow-hidden">
            <div class="relative py-10">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-white">
                            <span class="block text-4xl">Vídeo Carolina García</span>
                            <span class="block">Compra de farmacia</span>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="relative w-full mx-auto">
                <div class="max-w-7xl mx-auto px-4 sm:px-6">
                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/344270892?h=6116904964&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                </div>
            </div>
        </div>
    </div>

@endsection
