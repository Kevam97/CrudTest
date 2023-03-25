<x-guest-layout>
    <table class="table-fixed">
        <thead>
            <tr>
                <th>Pais</th>
                <th>Numero de Usuarios</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userCount as $item)
            <tr>
                <td>{{ $item->country->name }}</td>
                <td>{{ $item->users }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-guest-layout>
