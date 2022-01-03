@component('mail::message')
# Opinión desde Farmaconsulting

Nombre: <b>{{ $opinion->name }}</b> <br>
Email: <b>{{ $opinion->email }}</b> <br>

@switch($opinion->option)
    @case(1)
        <b>Le gusta la página</b>
        @break
    @case(2)
        <b>No le gusta la página</b>
        @break
    @default
        {!! 'Dió una opinión:' !!}
        {!! $opinion->message !!}
@endswitch

{{ config('app.name') }}
@endcomponent
