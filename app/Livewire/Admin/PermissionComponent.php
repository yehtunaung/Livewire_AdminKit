<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Permission;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

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
        abort_if(Gate::denies("permission_create"), Response::HTTP_FORBIDDEN, "403 Forbidden");
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
        abort_if(Gate::denies("permission_create"), Response::HTTP_FORBIDDEN, "403 Forbidden");

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
        abort_if(Gate::denies("permission_edit"), Response::HTTP_FORBIDDEN, "403 Forbidden");

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
        abort_if(Gate::denies("permission_edit"), Response::HTTP_FORBIDDEN, "403 Forbidden");
        $permission = Permission::findOrFail($id);
        $this->permissionId = $id;
        $this->title = $permission->title;

        $this->openModal();
    }
    public function delete($id)
    {
        abort_if(Gate::denies("permission_delete"), Response::HTTP_FORBIDDEN, "403 Forbidden");
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
