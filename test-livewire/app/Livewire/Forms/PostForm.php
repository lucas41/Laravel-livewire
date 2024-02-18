<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule('required', as:'titulo')]
    public string $title;
    #[Rule('required|min:10', as:'conteudo')]
    public string $content;

    public function resetform()
    {
        $this->title = '';
        $this->content = '';
    }

}


