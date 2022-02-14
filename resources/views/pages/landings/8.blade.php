@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Asesores</span>
@endsection

@section('landing-page-tile', 'Javier Noceda, Asesor Patrimonial, te cuenta cómo es nuestra atención personalizada y especialización.')

@section('landing-page-src', 'https://player.vimeo.com/video/675945989?h=f51dfd889c&title=0&byline=0&portrait=0')
