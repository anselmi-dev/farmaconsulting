@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Gerentes regionales</span>
@endsection

@section('landing-page-tile', 'Nuestros gerentes regionales te cuentan cómo coordinan localmente todos los recursos para alcanzar tu proyecto.')

@section('landing-page-src', 'https://player.vimeo.com/video/675949945?h=1815d247e2&title=0&byline=0&portrait=0&controls=0')
