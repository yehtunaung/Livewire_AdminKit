<?php

namespace App\Livewire\Admin;

use App\Models\Role;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;
use Livewire\Component;

class RoleComponent extends Component
{
    use WithPagination;

    public $role;
    public $roleId;
    public $isOpen = 0;

    #[Rule('required|min:3')]
    public $title;

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
        $this->validate();

        if($this->roleId)
        {
            $role = Role::find($this->roleId);
            $role->update([
                'title' => $this->title,
            ]);
            $this->dispatch('success',['message' => 'Role Updated Successfully!']);
        }else{
            Role::create([
                'title' => $this->title,
            ]);
            $this->dispatch('success', ['message' => 'Role created successfully!']);
        }
        $this->reset(['title', 'roleId']);
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
        ]);
    }
}
