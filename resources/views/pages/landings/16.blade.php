@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">¿Quieres vender?</span>
@endsection

@section('landing-page-tile', 'Juan Fernández de Trocóniz, te explica cómo te acompañamos durante el proceso de venta.')

@section('landing-page-src', 'https://player.vimeo.com/video/427423571?controls=0&title=0&byline=0&portrait=0')
