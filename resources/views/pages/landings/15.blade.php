@extends('layouts.landings.landing-videos', [
    'videos' => [
        ['title' => 'Salvador García, Gerente Regional Centro', 'vimeo' => 'https://player.vimeo.com/video/698643561?h=c8227ea014&byline=0&portrait=0&controls=0'],
        ['title' => 'David Salmerón, Gerente Regional', 'vimeo' => 'https://player.vimeo.com/video/698659189?h=df83d73938&byline=0&portrait=0&controls=0'],
        ['title' => 'Benjamín González, Gerente Regional Noroeste', 'vimeo' => 'https://player.vimeo.com/video/698655011?h=3311d714d8&byline=0&portrait=0&controls=0'],
        ['title' => 'Koldo Esquerdo, Gerente Zona Norte', 'vimeo' => 'https://player.vimeo.com/video/675949945?h=1815d247e2&title=0&byline=0&portrait=0&controls=0'],
    ]
])

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Gerentes regionales</span>
@endsection

@section('landing-page-tile', 'Nuestros gerentes regionales te cuentan cómo coordinan localmente todos los recursos para alcanzar tu proyecto.')
