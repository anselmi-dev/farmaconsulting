@extends('layouts.landings.landing-videos', [
    'videos' => [
        ['vimeo' => 'https://player.vimeo.com/video/492009245?title=0&byline=0&portrait=0'],
        ['vimeo' => 'https://player.vimeo.com/video/393621578?title=0&byline=0&portrait=0'],
        ['vimeo' => 'https://player.vimeo.com/video/393620791?title=0&byline=0&portrait=0'],
        ['vimeo' => 'https://player.vimeo.com/video/344270892?title=0&byline=0&portrait=0'],
    ]
])

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Testimonios</span>
@endsection
