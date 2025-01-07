<x-app-layout>
    <div class="container mx-auto mt-4">
        <h1 class="text-2xl font-bold mb-4">Nuevo Cliente</h1>
        <!-- <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input type="text" id="phone" name="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2  rounded-md">Guardar</button>
        </form> -->

        @livewire('create-client')
    </div>
</x-app-layout>
