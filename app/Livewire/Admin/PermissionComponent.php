<?php

namespace App\Livewire\Admin;

use App\Models\Permission;
use Livewire\Component;

class PermissionComponent extends Component
{
    public $title;
    public $permissions;
    public $isOpen = false;
    public $permissionId;

    protected $rules = [
        'title' => 'required|min:3',

    ];

    public function mount()
    {
        $this->permissions = Permission::all();
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
        $this->title = '';
        $this->permissionId = null;
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();

        if ($this->permissionId) {
            $permission = Permission::find($this->permissionId);
            $permission->update([
                'title' => $this->title,
            ]);
            $this->dispatch('success', ['message' => 'Permission Updated successfully!']);
        } else {
            Permission::create([
                'title' => $this->title,
            ]);
            $this->dispatch('success', ['message' => 'User created successfully!']);
        }
        $this->permissions = Permission::all();
        $this->closeModal();
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        $this->permissionId = $id;
        $this->title = $permission->title;
        $this->openModal();
    }

    public function delete($id)
    {
        $user = Permission::findOrFail($id);
        $user->delete();
        $this->permissions = Permission::all();
        session()->flash('success', 'Permission deleted successfully.');
    }

    public function render()
    {
        return view('livewire.admin.permission-component');
    }
}
