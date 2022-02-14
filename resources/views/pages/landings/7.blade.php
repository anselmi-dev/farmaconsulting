@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">{{ __('Escaner') }}</a>/
    <span class="inline-block">Alfredo Alonso</span>
@endsection

@section('landing-page-tile', 'Alfredo Alonso, Director General de Farmaconsulting, te da la bienvenida.')

@section('landing-page-src', 'https://player.vimeo.com/video/675429549?h=f330c4361e&title=0&byline=0&portrait=0')
