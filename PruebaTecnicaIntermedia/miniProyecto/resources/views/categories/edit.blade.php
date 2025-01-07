<x-app-layout>
    <div class="container mx-auto mt-4">
        <h1 class="text-2xl font-bold mb-4">Editar Categoría</h1>
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="name" name="name" value="{{ $category->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ $category->description }}</textarea>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Actualizar</button>
        </form>
    </div>
</x-app-layout>
