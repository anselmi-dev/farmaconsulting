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
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, officiis atque accusantium, fugit obcaecati iure eos ab quas eum, accusamus porro cupiditate iusto. Vero cum sed id corporis necessitatibus voluptatem.
    </p>
</div>
@endsection
