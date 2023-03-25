<x-mail::message>
# Novedades

Usuario {{ $user->name.' '.$user->lastname }} has sido registrado en nuesta platafroma {{ config('app.name') }}.
Ya puede ingresar con su correo {{ $user->email }}

<x-mail::button :url="env('APP_URL') . '/login' ">
IR A LA PAGINA
</x-mail::button>

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
