<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{

    public $teste = "ola mundo";
    public function render()
    {
        return view('livewire.contador');
    }
}
