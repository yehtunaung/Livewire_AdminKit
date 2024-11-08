<?php

namespace App\Livewire\Admin;

use App\Models\Permission;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;
use Livewire\Component;

class PermissionComponent extends Component
{
    use WithPagination;

    public $permission;
    public $permissionId;
    public $isOpen = false;

    #[Rule('required|min:3')]
    public $title;

    public function create()
    {
        $this->reset('title', 'permissionId');
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
        $this->reset('title', 'permissionId');
    }

    public function store()
    {
        $this->validate();
        Permission::create([
            'title' => $this->title,
        ]);
        $this->dispatch('success', ['message' => 'Permission created successfully!']);
        $this->reset(['title', 'permissionId']);
        $this->closeModal();
    }

    public function update()
    {
        $this->validate();
        $permission = Permission::find($this->permissionId);
        $permission->update([
            'title' => $this->title,
        ]);

        $this->dispatch('success', ['message' => 'Permission updated successfully!']);
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
        $permission = Permission::findOrFail($id);
        $permission->delete();
        session()->flash('success', 'Permission deleted successfully.');
    }

    public function render()
    {
        return view('livewire.admin.permission-component', [
            'permissions' => Permission::paginate(5),
        ]);
    }
}
