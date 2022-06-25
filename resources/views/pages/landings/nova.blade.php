@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">{{ __('Escaner') }}</a>/
    <span class="inline-block">{{ $landing->breadcrumb }}</span>
@endsection

@section('content')
    <div id="app" class="url-content bg-base text-white">
        <div class="overflow-hidden">
            @foreach ($landing->content as $key => $content)
                @switch($content->name())
                    @case('title')
                        <x-title :key="$key" :content="$content"/>
                        @break
                    @case('video')
                        <x-video :key="$key" :content="$content"/>
                        @break
                    @case('iframe')
                        <x-iframe :key="$key" :content="$content"/>
                        @break
                    @default
                @endswitch
            @endforeach
        </div>
    </div>
@endsection

