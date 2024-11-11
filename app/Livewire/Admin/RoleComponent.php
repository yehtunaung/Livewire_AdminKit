<?php

namespace App\Livewire\Admin;

use App\Models\Permission;
use App\Models\Role;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Str;

class RoleComponent extends Component
{
    use WithPagination;

    public $role;
    public $roleId;
    public $isOpen = false;
    public $permissions;
    #[Rule('required|min:3')]
    public $title;
    #[Rule('required')]
    public $permission = [];
    public $groupedPermissions;
    public function mount()
    {

        $permissions = Permission::all();
        $this->groupedPermissions = $permissions->groupBy(function ($permission) {
            return Str::beforeLast($permission->title, '_');
        })->toArray(); // Convert to array for better Livewire handling
    }
    public function create()
    {
        $this->reset('title', 'roleId');
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
        $this->reset('title', 'roleId');
    }

    public function store()
    {
       $validate = $this->validate();
       dd($validate);
        Role::create([
            'title' => $this->title,
        ]);
        $this->dispatch('success', ['message' => 'Role created successfully!']);
        $this->reset(['title', 'roleId']);
        $this->closeModal();
    }

    public function update()
    {
        $this->validate();

        $role = Role::find($this->roleId);
        $role->update([
            'title' => $this->title,
        ]);

        $this->dispatch('success', ['message' => 'Role updated successfully!']);
        $this->closeModal();
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $this->roleId = $id;
        $this->title = $role->title;

        $this->openModal();
    }
    public function delete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        session()->flash('success', 'Role deleted successfully.');
    }
    public function render()
    {
        return view('livewire.admin.role-component', [
            'roles' => Role::paginate(5),
            'groupedPermissions' => $this->groupedPermissions,
        ]);
    }
}
