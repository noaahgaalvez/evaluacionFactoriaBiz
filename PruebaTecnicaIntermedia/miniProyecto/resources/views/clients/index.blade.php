<x-app-layout>

@if (session()->has('message'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('message') }}
    </div>
@endif

<div class="container p-5">
    <h1 class="text-2xl font-bold mb-4">Clientes</h1>
    <a href="{{ route('clients.create') }}">Nuevo Cliente</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td class="px-2">
                    {{ $client->id }}
                </td>
                <td class="px-2">
                    {{ $client->name }}
                </td>
                <td class="px-2">
                    {{ $client->email }}
                </td>
                <td class="px-2">
                    {{ $client->phone }}
                </td>
                <td class="px-2">
                    <a href="{{ route('clients.edit', $client) }}">Editar</a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
