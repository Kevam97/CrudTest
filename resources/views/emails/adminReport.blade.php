<x-mail::message>
# Novedades

Se ha inscrito un nuevo usuario

<x-mail::button :url="env('APP_URL') . '/report' ">
Ver reporte
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
