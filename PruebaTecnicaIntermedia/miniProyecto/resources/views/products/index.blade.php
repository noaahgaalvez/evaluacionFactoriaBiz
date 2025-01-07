<x-app-layout>
    <div class="container p-5">
        <h1 class="text-2xl font-bold mb-4">Productos</h1>
        <a href="{{ route('products.create') }}">Nuevo Producto</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th class="px-2">#</th>
                    <th class="px-2">Nombre</th>
                    <th class="px-2">Precio</th>
                    <th class="px-2">Categoría</th>
                    <th class="px-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="px-2">{{ $product->id }}</td>
                    <td class="px-2">{{ $product->name }}</td>
                    <td class="px-2">{{ $product->price }}</td>
                    <td class="px-2">{{ $product->category->name }}</td>
                    <td class="px-2">
                        <a href="{{ route('products.edit', $product) }}">Editar</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
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
