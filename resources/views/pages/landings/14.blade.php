@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Procesos y tecnología</span>
@endsection

@section('landing-page-tile', 'Mario Librado, te cuenta nuestros rigurosos procesos de control de calidad y de la experiencia del cliente.')

@section('landing-page-src', 'https://player.vimeo.com/video/675799336?h=1ed311186b&title=0&byline=0&portrait=0')
