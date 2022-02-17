@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Análisis especializado</span>
@endsection

@section('landing-page-tile', 'Gorka Calvete, te habla de los exclusivos análisis que realizamos en cada farmacia.')

@section('landing-page-src', 'https://player.vimeo.com/video/675562521?h=0824201001&controls=0&title=0&byline=0&portrait=0')
