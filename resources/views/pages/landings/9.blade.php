@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Seguridad jurídica</span>
@endsection

@section('landing-page-tile', 'Félix Ángel Fernández, te habla de la importancia de la seguridad jurídica.')

@section('landing-page-src', 'https://player.vimeo.com/video/675945989?h=f51dfd889c&controls=0')
