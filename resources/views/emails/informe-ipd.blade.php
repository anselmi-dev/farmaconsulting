@component('mail::message')
# Informe personalizado IPDª solicitado

Usuario: <b>{{ $user->email }}</b> <br>
Nombre: <b>{{ $user->name }}</b> <br>
Apellido 1: <b>{{ $user->lastname }}</b> <br>
Apellido 2: <b>{{ $user->lastname2 }}</b> <br>
Teléfono: <b>{{ $user->phone }}</b> <br>
Código catálogo: <b>{{ $user->catalogue }}</b> <br>

<br>
<br>

{{ config('app.name') }}
@endcomponent
