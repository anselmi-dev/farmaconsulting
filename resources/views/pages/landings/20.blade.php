@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">¿Quieres comprar?</span>
@endsection

@section('landing-page-tile', 'Juan Fernández de Trocóniz, te explica cómo trabajamos para optimizar tu inversión.')

@section('landing-page-src', 'https://player.vimeo.com/video/427419060?controls=0&title=0&byline=0&portrait=0')
