@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Plan de promoción</span>
@endsection

@section('landing-page-tile', 'Juan Antonio Adsuar, te cuenta la importancia de diseñar un plan de promoción personalizado.')

@section('landing-page-src', 'https://player.vimeo.com/video/675439516?h=39700edb3c&controls=0')
