@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Transmisión familiar</span>
@endsection

@section('landing-page-tile', 'Félix Ángel Fernández, te explica la especialización que requiere una transmisión familiar.')

@section('landing-page-src', 'https://player.vimeo.com/video/675551188?h=ce0d226979&controls=0')
