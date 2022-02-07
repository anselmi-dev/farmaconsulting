@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Vídeo Nuría Ruiz</span>
@endsection

@section('nav-icon')
    <a href="{{ route('home') }}">
        @includeIf('layouts.icons.back')
    </a>
@endsection

@section('content')
    <div id="app" class="url-content bg-base">
        <div class="relative overflow-hidden">
            <div class="relative py-10">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-white">
                            <span class="block text-4xl">Escucha los testimonios de clientes que ya han cumplido su sueño</span>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="relative w-full mx-auto">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 pb-10">
                    <div class="relative" style="padding:56.25% 0 0 0;">
                        <div id="playbtn" class="absolute flex items-center justify-center w-full h-full cursor-pointer z-10 top-0 left-0 m-auto">
                            <img src="{{ asset('images/pay.png') }}" class="max-w-full max-h-full w-20">
                        </div>
                        <iframe id="video-player" class="top-0 absolute left-0 w-full h-full" src="https://player.vimeo.com/video/393621578?controls=0"
                            videoframeborder="0" allow="autoplay; fullscreen; picture-in-picture" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://player.vimeo.com/api/player.js"></script>
    <script>
            const playbtn = document.getElementById('playbtn');
            const player = document.getElementById('video-player');
            const vimeoPlayer = new Vimeo.Player(player);
            playbtn.onclick = function() {
            playbtn.style.display = "none";
                vimeoPlayer.play();
            }
            vimeoPlayer.on('pause', function() {
                playbtn.style.display = "block";
            });
            vimeoPlayer.on('play', function() {
                playbtn.style.display = "none";
            });
    </script>
@endpush
