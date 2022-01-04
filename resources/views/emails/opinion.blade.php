@component('mail::message')
# Opinión desde Farmaconsulting

@if ($opinion->option == 1)
## <b>{{ $opinion->name }} ({{ $opinion->email }}) </b> {{ __('Le gusta la página') }}
@elseif ($opinion->option == 2)
## <b>{{ $opinion->name }} ({{ $opinion->email }}) </b> {!! 'No le gusta la página' !!}
@elseif ($opinion->option == 3)
## <b>{{ $opinion->name }} ({{ $opinion->email }}) </b> {!! 'Dió una opinión:' !!}  
@endif

## {!! $opinion->message !!}

<br>
<br>

{{ config('app.name') }}
@endcomponent
