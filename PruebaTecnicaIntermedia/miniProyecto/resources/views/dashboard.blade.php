<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <a href="{{ route('clients.index') }}">Clientes</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 p-5">
                <a href="{{ route('categories.index') }}">Categorías</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 p-5">
                <a href="{{ route('products.index') }}">Productos</a>
            </div>
        </div>
    </div>
</x-app-layout>
