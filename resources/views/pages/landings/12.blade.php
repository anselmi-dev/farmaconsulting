@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Negociación especializada</span>
@endsection

@section('landing-page-tile', 'Javier Perea, te habla sobre los beneficios de contar con un equipo especialista en negociación')

@section('landing-page-src', 'https://player.vimeo.com/video/675419740?h=7ea645afa1&title=0&byline=0&portrait=0&controls=0')
