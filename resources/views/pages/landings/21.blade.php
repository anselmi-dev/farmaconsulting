@extends('layouts.landings.landing-iframe')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Farmacias en venta</span>
@endsection

@section('src', 'https://www.farmaconsulting.es/farmacias-en-venta?pwa=true')