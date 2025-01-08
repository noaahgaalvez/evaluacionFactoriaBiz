<x-app-layout>

    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <div class="container p-5">
        <h1 class="text-2xl font-bold mb-4">Categorías</h1>
        @if (Auth::user()->role == 'admin')
            <a href="{{ route('categories.create') }}">Nueva Categoría</a>
        @endif
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    @if (Auth::user()->role == 'admin')
                        <th>Acciones</th>
                    @endif
                    </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td class="px-2">{{ $category->id }}</td>
                    <td class="px-2">{{ $category->name }}</td>
                    <td class="px-2">{{ $category->description }}</td>
                    @if (Auth::user()->role == 'admin')
                        <td class="px-2">
                            <a href="{{ route('categories.edit', $category) }}">Editar</a>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
