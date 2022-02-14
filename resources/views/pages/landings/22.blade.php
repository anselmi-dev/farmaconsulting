@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Nueva sede</span>
@endsection

@section('landing-page-tile', 'Descubre en este vídeo cómo será este punto de encuentro para la profesión farmacéutica.')

@section('landing-page-src', 'https://player.vimeo.com/video/675391816?controls=0')
