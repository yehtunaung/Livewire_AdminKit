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

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function mount()
    {
        $this->users = ModelsUser::all(); // Fetch all users from the database
    }

    public function create()
    {

        $validatedData = $this->validate();

        // \Log::info('Create method called', $validatedData);
        User::create($validatedData); // Create a new user record
        $this->reset(['name', 'email', 'password']); // Reset all input fields
        session()->flash('success', 'Create Success.');
    }

    public function render()
    {
        return view('livewire.user');
    }
}
