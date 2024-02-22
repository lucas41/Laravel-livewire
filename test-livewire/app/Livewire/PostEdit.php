<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;

class PostEdit extends Component
{

    use WithFileUploads;

    public Post $post;

    #[Rule('required')]
    public $title;
    #[Rule('required|min:20')]
    public $content;
    #[Rule('nullable|image|max:1024')]
    public $photo;

    public function mount()
    {
        $this->title = $this->post->title;
        $this->content = $this->post->content;
    }

    public function updatedPhoto()
    {
        if(!in_array($this->photo->extension(),['png', 'jpeg', 'jpg'])) {
            $this->photo = null;
        }
    }

    public function update()
    {
        $this->validate();
        $success = Post::where('id', $this->post->id)->update([
            'title' => $this->title,
            'content' => $this->content,
            'photo' => $this->photo ? $this->photo->store('photo', 'public') : $this->post->photo,
        ]);

        if ($success) {
            $this->js(<<<JS
            swal.fire('Post atualizado com sucesso', '', 'success');
        JS);
        } else {
            $this->js(<<<JS
            swal.fire('Falha ao atualizar o post', '', 'error');
        JS);
        }
    }

    public function render()

    {
        return view('livewire.post-edit');
    }
}
