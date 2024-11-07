<?php

namespace App\Livewire\Admin;

use App\Models\User as ModelsUser;
use Livewire\Component;

class UserComponent extends Component
{
    public $name;
    public $email;
    public $password;
    public $users;
    public $isOpen = false;
    public $userId;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'nullable|min:6',
    ];

    public function mount()
    {
        $this->users = ModelsUser::all();
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
        $this->userId = null;
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();

        if ($this->userId) {

            $user = ModelsUser::find($this->userId);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password ? bcrypt($this->password) : $user->password,
            ]);
            $this->dispatch('success', ['message' => 'User Updated successfully!']);
        } else {

            ModelsUser::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);
            $this->dispatch('success', ['message' => 'User created successfully!']);
        }

        $this->users = ModelsUser::all();
        $this->closeModal();
    }

    public function edit($id)
    {
        $user = ModelsUser::findOrFail($id);
        $this->userId = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = '';
        $this->openModal();
    }

    public function delete($id)
    {
        $user = ModelsUser::findOrFail($id);
        $user->delete();
        $this->users = ModelsUser::all();
        session()->flash('success', 'User deleted successfully.');
    }

    public function render()
    {
        return view('livewire.admin.user-component');
    }
}
