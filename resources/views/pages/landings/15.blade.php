@extends('layouts.landings.landing-videos', [
    'videos' => [
        [
            'title'    => 'Gerente Regional Centro',
            'subtitle' => '(Madrid, Castilla La Mancha, Extremadura y sur de Castilla y León)',
            'vimeo'    => 'https://player.vimeo.com/video/698643561?h=c8227ea014&byline=0&portrait=0&controls=0'
        ],
        [
            'title'    => 'Gerente Regional Noreste',
            'subtitle' => '(Cataluña e Islas Baleares)',
            'vimeo'    => 'https://player.vimeo.com/video/698659189?h=df83d73938&byline=0&portrait=0&controls=0'
        ],
        [
            'title'    => 'Gerente Regional Noroeste',
            'subtitle' => '(Galicia, Asturias y oeste de Castilla y León)',
            'vimeo'    => 'https://player.vimeo.com/video/698655011?h=3311d714d8&byline=0&portrait=0&controls=0'
        ],
        [
            'title'    => 'Gerente Zona Norte',
            'subtitle' => '(País Vasco, Cantabria, Aragón, Navarra, La Rioja y norte de Castilla y León)',
            'vimeo'    => 'https://player.vimeo.com/video/675949945?h=1815d247e2&title=0&byline=0&portrait=0&controls=0'
        ],
    ]
])

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Gerentes regionales</span>
@endsection

@section('landing-page-tile', 'Nuestros gerentes regionales te cuentan cómo coordinan localmente todos los recursos para alcanzar tu proyecto.')
