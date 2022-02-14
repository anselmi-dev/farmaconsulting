@extends('layouts.app')

@section('nav-icon')
    <a href="{{ route('home') }}">
        @includeIf('layouts.icons.back')
    </a>
@endsection

@section('content')
    <div>
        <iframe class="url-content" src="@yield('src')" title="Farmaconsulting"></iframe>
    </div>
@endsection