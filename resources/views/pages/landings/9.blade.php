@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">
        {{ __('Seguridad jurídica') }}
    </span>
@endsection

@section('landing-page-tile', 'Félix Ángel Fernández, te habla de la importancia de la seguridad jurídica.')

@section('landing-page-src', 'https://player.vimeo.com/video/675525143?h=2ff30dd63c&title=0&byline=0&portrait=0&controls=0')