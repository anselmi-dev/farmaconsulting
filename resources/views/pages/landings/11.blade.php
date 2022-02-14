@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Servicios financieros</span>
@endsection

@section('landing-page-tile', 'Koldo Gómez, te habla sobre lo esencial de la financiación para comprar una farmacia.')

@section('landing-page-src', 'https://player.vimeo.com/video/675501680?h=81c62f5e0f&controls=0')
