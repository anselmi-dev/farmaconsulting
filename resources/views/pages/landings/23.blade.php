@extends('layouts.landings.landing-videos', [
    'videos' => [
        ['title' => 'Alvaro Fernández', 'vimeo' => 'https://player.vimeo.com/video/415844612'],
        ['title' => 'Almendra Fernández', 'vimeo' => 'https://player.vimeo.com/video/410503506'],
        ['title' => 'Rosa Montes', 'vimeo' => 'https://player.vimeo.com/video/416237384'],
        ['title' => 'Ana López', 'vimeo' => 'https://player.vimeo.com/video/417224910'],
        ['title' => 'Ana Lova', 'vimeo' => 'https://player.vimeo.com/video/417640551'],
        ['title' => 'Carolina Manzano', 'vimeo' => 'https://player.vimeo.com/video/440600835'],
        ['title' => 'Blanca Chacón', 'vimeo' => 'https://player.vimeo.com/video/426918549'],
        ['title' => 'Belén Ibarra', 'vimeo' => 'https://player.vimeo.com/video/424013295'],
        ['title' => 'Raquel del Moral', 'vimeo' => 'https://player.vimeo.com/video/423126708'],
        ['title' => 'Teresa Gómez', 'vimeo' => 'https://player.vimeo.com/video/416024623'],
        ['title' => 'Ana Leonor Escolar', 'vimeo' => 'https://player.vimeo.com/video/416235123'],
        ['title' => 'José María Paz', 'vimeo' => 'https://player.vimeo.com/video/423519160'],
        ['title' => 'Asunción Lázaro', 'vimeo' => 'https://player.vimeo.com/video/433902763'],
        ['title' => 'Helena Santamaría', 'vimeo' => 'https://player.vimeo.com/video/433554971'],
        ['title' => 'Miguel Prado', 'vimeo' => 'https://player.vimeo.com/video/412364420'],
        ['title' => 'Enrique Almarza', 'vimeo' => 'https://player.vimeo.com/video/430060041'],
        ['title' => 'Abel Belda', 'vimeo' => 'https://player.vimeo.com/video/417559847'],
        ['title' => 'Luis Castro', 'vimeo' => 'https://player.vimeo.com/video/415845663'],
        ['title' => 'Trinidad Arroyo', 'vimeo' => 'https://player.vimeo.com/video/415839897'],
        ['title' => 'Gastón Belzunce', 'vimeo' => 'https://player.vimeo.com/video/415839259'],
        ['title' => 'Antonio Real', 'vimeo' => 'https://player.vimeo.com/video/415817614'],
        ['title' => 'Aquilino García', 'vimeo' => 'https://player.vimeo.com/video/415411565'],
        ['title' => 'Juan Gabriel Sans', 'vimeo' => 'https://player.vimeo.com/video/415046872'],
        ['title' => 'Pablo Aparici', 'vimeo' => 'https://player.vimeo.com/video/414767944'],
        ['title' => 'David Miñarro', 'vimeo' => 'https://player.vimeo.com/video/413597107'],
        ['title' => 'Ainhoa Sáez de Vicuña', 'vimeo' => 'https://player.vimeo.com/video/413141719'],
        ['title' => 'Cristina Escurís', 'vimeo' => 'https://player.vimeo.com/video/413133472'],
        ['title' => 'Mónica Castillo', 'vimeo' => 'https://player.vimeo.com/video/413128170'],
        ['title' => 'Francisco Javier Salvador', 'vimeo' => 'https://player.vimeo.com/video/412361259'],
        ['title' => 'Iria Sesar', 'vimeo' => 'https://player.vimeo.com/video/415844017'],
        ['title' => 'Carolina García', 'vimeo' => 'https://player.vimeo.com/video/415840360'],
    ]
])

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Orgullos@deserfarmacéutic@</span>
@endsection

@section('landing-page-tile', 'Así vivieron los clientes de la Farmaconsulting su experiencia en primera línea durante la crisis sanitaria.')
