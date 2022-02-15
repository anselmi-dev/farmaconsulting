@extends('layouts.landings.landing-video')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">{{ __('Escaner') }}</a>/
    <span class="inline-block">{{ __('Conócenos') }}</span>
@endsection

@section('landing-page-tile', 'Te invitamos a conocernos un poco mejor.')

@section('landing-page-src', 'https://player.vimeo.com/video/675429549?h=f330c4361e&title=0&byline=0&portrait=0&controls=0')
