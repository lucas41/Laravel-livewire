<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class PostrCreate extends Component
{
    public PostForm $form;
    public function create()
    {
        $this->validate();

        Post::create([
            'title' => $this->form->title,
            'content' => $this->form->content,
            'user_id' => 6,
        ]);

        $this->form->resetform();
        session()->flash('success', 'Post criado com sucesso.');
    }
    public function render()
    {
        return view('livewire.postr-create');
    }
}
