<?php

namespace App\Livewire\Admin;

use App\Models\Permission;
use App\Models\Role;
use Livewire\Component;
use Illuminate\Support\Str;

class RoleComponent extends Component
{
    public $role;
    public $roleId;
    public $isOpen = false;
    public $permissions = []; // Store selected permissions
    public $title;
    public $groupedPermissions;

    public function mount()
    {
        // Get all permissions and group them by prefix
        $permissions = Permission::all();
        $this->groupedPermissions = $permissions->groupBy(function ($permission) {
            return Str::beforeLast($permission->title, '_'); // Group by prefix
        })->toArray();
    }

    public function create()
    {
        $this->reset('title', 'roleId', 'permissions');
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
        $this->reset('title', 'roleId', 'permissions');
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'permissions' => 'required|array|min:1',
        ]);

        $role = Role::create([
            'title' => $this->title,
        ]);

        $role->permissions()->sync($this->permissions);

        $this->dispatch('success', ['message' => 'Role created successfully!']);
        $this->reset(['title', 'roleId', 'permissions']);
        $this->closeModal();
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'permissions' => 'required|array|min:1',
        ]);

        $role = Role::find($this->roleId);
        $role->update([
            'title' => $this->title,
        ]);

        $role->permissions()->sync($this->permissions);

        $this->dispatch('success', ['message' => 'Role updated successfully!']);
        $this->closeModal();
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $this->roleId = $id;
        $this->title = $role->title;
        $this->permissions = $role->permissions->pluck('id')->toArray(); // Get current permissions

        $this->openModal();
    }

    public function delete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        session()->flash('success', 'Role deleted successfully.');
    }


    public function isGroupSelected($prefix)
    {
        $groupPermissions = collect($this->groupedPermissions[$prefix])->pluck('id')->toArray();
        return empty(array_diff($groupPermissions, $this->permissions));
    }

    public function toggleAllPermissions()
    {
        // If all permissions are already selected, deselect them
        if (count($this->permissions) === count(Permission::all())) {
            $this->permissions = [];
        } else {
            // Otherwise, select all permissions
            $this->permissions = Permission::all()->pluck('id')->toArray();
        }
    }

    public function toggleGroupPermission($prefix)
    {
        $groupPermissions = collect($this->groupedPermissions[$prefix])->pluck('id')->toArray();

        // Check if all permissions in this group are selected
        $groupSelected = array_diff($groupPermissions, $this->permissions);

        if (empty($groupSelected)) {
            // If all are selected, deselect the entire group
            $this->permissions = array_diff($this->permissions, $groupPermissions);
        } else {
            // Otherwise, select all permissions in this group
            $this->permissions = array_merge($this->permissions, $groupPermissions);
        }
    }

    public function render()
    {
        return view('livewire.admin.role-component', [
            'roles' => Role::paginate(5),
            'groupedPermissions' => $this->groupedPermissions,
        ]);
    }
}
