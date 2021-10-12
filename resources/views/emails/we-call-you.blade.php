@component('mail::message')
# Contacto desde Farmaconsulting

Nombre: <b>{{ $contact->name }}</b> <br>
Apellido: <b>{{ $contact->lastname }}</b> <br>
Email: <b>{{ $contact->email }}</b> <br>
Teléfono: <b>{{ $contact->phone }}</b> <br>
Provincia: <b>{{ $contact->label_province }}</b> <br>
Interesado/a en: <b>{{ $contact->interested }}</b> <br>

Consulta:<br>
<b>
    {{ $contact->message }}
</b>

<br>
<br>

{{ config('app.name') }}
@endcomponent
