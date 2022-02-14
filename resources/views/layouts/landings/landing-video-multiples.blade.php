@extends('layouts.landings.landing-videos', [
    'videos' => [
        ['vimeo' => 'https://player.vimeo.com/video/492009245'],
        ['vimeo' => 'https://player.vimeo.com/video/393621578'],
        ['vimeo' => 'https://player.vimeo.com/video/393620791'],
        ['vimeo' => 'https://player.vimeo.com/video/344270892'],
    ]
])

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Testimonios</span>
@endsection
