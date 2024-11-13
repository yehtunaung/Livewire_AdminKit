<?php

namespace App\Livewire\Admin;

use App\Models\User as ModelsUser;
use App\Models\Role;
use Illuminate\Foundation\Auth\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;
    public $name;
    public $email;
    public $password;
    public $user;
    public $isOpen = false;
    public $userId;
    public $role_ids = [];
    public $roles;

    public function mount()
    {
        $this->user = ModelsUser::all();
        $this->roles = Role::all();
    }
    public function create()
    {
        $this->reset('name', 'email', 'password', 'role_ids', 'userId');
        $this->openModal();
    }
    public function openModal()
    {
        $this->isOpen = true;
        $this->resetValidation();
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->reset('name', 'email', 'password', 'role_ids', 'userId');
    }

    public function store()
    {
        $validate = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $user = ModelsUser::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $user->roles()->sync($this->role_ids);

        $this->dispatch('success', ['message' => 'User created successfully!']);
        $this->reset('name', 'email', 'password', 'role_ids', 'userId');
        $this->closeModal();
    }


    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_ids' => 'required|array',
        ]);

        $user = ModelsUser::find($this->userId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password ? bcrypt($this->password) : $user->password,
        ]);
        $user->roles()->sync($this->role_ids);
        $this->dispatch('success', ['message' => 'User updated successfully!']);
        $this->closeModal();
    }

    public function edit($id)
    {
        $user = ModelsUser::findOrFail($id);
        $this->userId = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role_ids = $user->roles->pluck('id')->toArray();
        $this->password = '';
        $this->openModal();
    }

    public function delete($id)
    {
        $user = ModelsUser::findOrFail($id);
        $user->roles()->detach();
        $user->delete();
        $this->user = ModelsUser::all();
        session()->flash('success', 'User deleted successfully.');
    }

    public function render()
    {
        // dd($this->roles);
        return view('livewire.admin.user-component', [
            "users" => ModelsUser::paginate(5),
            'roles' => $this->roles,
        ]);
    }
}
