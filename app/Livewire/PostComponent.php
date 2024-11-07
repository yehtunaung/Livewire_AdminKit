<?php

namespace App\Livewire;

use App\Models\Post;

use App\Models\Post as ModelsPost;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination; 
    #[Rule('required|min:3')]
    public $title;

    #[Rule('required|min:3')]
    public $body;

    public $multi = [];

    public $isOpen = 0;

    public function create()
    {
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
    }

    public function store()
    {
        $this->validate();
        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        $this->dispatch('success', ['message' => 'Post created successfully!']);
        $this->reset('title','body');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.post',[
            'posts' => Post::paginate(50),
        ]);
    }
}
