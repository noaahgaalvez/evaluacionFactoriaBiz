<x-app-layout>
    <div class="container p-5">
        <h1 class="text-2xl font-bold mb-4">Categorías</h1>
        <a href="{{ route('categories.create') }}">Nueva Categoría</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td class="px-2">{{ $category->id }}</td>
                    <td class="px-2">{{ $category->name }}</td>
                    <td class="px-2">{{ $category->description }}</td>
                    <td class="px-2">
                        <a href="{{ route('categories.edit', $category) }}">Editar</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline-block;">
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
