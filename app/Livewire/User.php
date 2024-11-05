<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $name;
    public $email;
    public $password;
    public $users;
    public $isOpen = false; // Set default to false

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function mount()
    {
        $this->users = ModelsUser::all(); // Fetch all users from the database
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->resetValidation();
    }

    public function saveUser()
    {
        $this->validate();

        ModelsUser::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->users = ModelsUser::all(); // Refresh the user list
        $this->closeModal(); // Close modal after saving
    }

    public function render()
    {
        return view('livewire.user');
    }
}
