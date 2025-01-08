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
        <h1 class="text-2xl font-bold mb-4">Productos</h1>
        @if (Auth::user()->role == 'admin')
            <a href="{{ route('products.create') }}">Nuevo Producto</a>
        @endif
        <table class="table mt-4">
            <thead>
                <tr>
                    <th class="px-2">#</th>
                    <th class="px-2">Nombre</th>
                    <th class="px-2">Precio</th>
                    <th class="px-2">Categoría</th>
                    @if (Auth::user()->role == 'admin')
                        <th class="px-2">Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="px-2">{{ $product->id }}</td>
                    <td class="px-2">{{ $product->name }}</td>
                    <td class="px-2">{{ $product->price }}</td>
                    <td class="px-2">{{ $product->category->name }}</td>
                    @if (Auth::user()->role == 'admin')
                        <td class="px-2">
                            <a href="{{ route('products.edit', $product) }}">Editar</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
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
