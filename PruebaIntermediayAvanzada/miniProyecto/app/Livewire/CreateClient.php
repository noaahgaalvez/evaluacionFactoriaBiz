<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;

class CreateClient extends Component
{
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|min:9',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();

        Client::create($validatedData);

        session()->flash('message', 'Cliente creado con éxito.');
        
        return redirect()->route('clients.index');
    }

    public function render()
    {
        return view('livewire.create-client');
    }
}
