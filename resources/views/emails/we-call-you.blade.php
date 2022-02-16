@component('mail::message')
# Contacto desde Farmaconsulting

Nombre: <b>{{ $contact->name }}</b> <br>
Apellido: <b>{{ $contact->lastname }}</b> <br>
Teléfono: <b>{{ $contact->phone }}</b> <br>
Zona horario: <b>{{ $contact->timezone }}</b> <br>

Consulta:<br>
<b>
    {{ $contact->message }}
</b>

<br>
<br>

{{ config('app.name') }}
@endcomponent
