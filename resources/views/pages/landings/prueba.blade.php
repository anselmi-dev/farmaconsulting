@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Título de la landing</span>
@endsection

@section('nav-icon')
    <a href="{{ route('home') }}">
        @includeIf('layouts.icons.back')
    </a>
@endsection

@section('content')
<div class="px-6 py-6">
    <div class="w-full lg:w-1/2 mx-auto">
        <h1 class="text-4xl font-blod text-center">
            ESTO ES UNA LANDING DE PRUEBA
        </h1>
    </div>
</div>
@endsection
