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
    <div class="url-content bg-base">
        <div class="relative overflow-hidden">
            <div class="relative py-10">
                <div class="mx-auto max-w-7xl px-4 sm:px-6">
                    <div class="lg:text-center">
                        <h1 class="text-3xl font-bold text-white">
                            <span class="block text-4xl">Escucha los testimonios de clientes que ya han cumplido su sueño</span>
                        </h1>
                        {{-- <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl"></p> --}}
                    </div>
                </div>
            </div>

            <div class="relative w-full mx-auto">
                <div class="max-w-7xl mx-auto px-4 sm:px-6">
                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/393621578?h=b9dd171166&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                    {{-- <iframe class="mx-auto max-w-full" src="https://player.vimeo.com/video/393621578?h=b9dd171166" width="640" height="360"
                        frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
