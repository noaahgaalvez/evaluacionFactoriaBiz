<div>
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nombre</label>
            <input type="text" id="name" wire:model="name" class="w-full border-gray-300 rounded mt-1">
            @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Correo Electrónico</label>
            <input type="email" id="email" wire:model="email" class="w-full border-gray-300 rounded mt-1">
            @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-gray-700">Teléfono</label>
            <input type="text" id="phone" wire:model="phone" class="w-full border-gray-300 rounded mt-1">
            @error('phone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Guardar Cliente</button>
    </form>
</div>
