@component('mail::message')
# Consulta desde Farmaconsulting

Nombre: <b>{{ $contact->name }}</b> <br>
Apellido: <b>{{ $contact->lastname }}</b> <br>
Teléfono: <b>{{ $contact->phone }}</b> <br>
Zona horaria: <b>{{ $contact->timezone }}</b> <br>

Mensaje:<br>
<h1>{{ $contact->message }}</h1>
<br>
<br>
{{ config('app.name') }}
@endcomponent
