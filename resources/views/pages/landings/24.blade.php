@extends('layouts.landings.landing-iframe')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Vídeo Nuría Ruiz</span>
@endsection

@section('landing-page-tile', 'Escucha los testimonios de clientes que ya han cumplido su sueño')

@section('src', 'https://www.farmaconsulting.es/farmacias-en-venta?pwa=true')
