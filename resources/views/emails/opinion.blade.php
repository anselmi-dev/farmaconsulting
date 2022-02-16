@component('mail::message')
# Opinión desde Farmaconsulting

@if ($opinion->option == 1)
## {{ $opinion->name }} ({{ $opinion->email }})
{{ __('Le gusta la página') }}
@elseif ($opinion->option == 2)
## {{ $opinion->name }} ({{ $opinion->email }})
{!! 'No le gusta la página' !!}
@elseif ($opinion->option == 3)
## {{ $opinion->name }} ({{ $opinion->email }})
{!! 'Dió una opinión:' !!}  
@endif

Opinión: <br>
## {!! $opinion->message !!}

<br>
<br>

{{ config('app.name') }}
@endcomponent
