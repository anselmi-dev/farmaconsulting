@extends('layouts.landings.landing-videos', [
    'videos' => [
        ['vimeo' => 'https://player.vimeo.com/video/675429549?h=f330c4361e'],
        ['vimeo' => 'https://player.vimeo.com/video/675391816?h=79d27bd5a2']
    ]
])

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">{{ __('Escaner') }}</a>/
    <span class="inline-block">{{ __('Conócenos') }}</span>
@endsection

@section('landing-page-tile', 'Te invitamos a conocernos un poco mejor.')
