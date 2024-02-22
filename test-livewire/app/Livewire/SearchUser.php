<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SearchUser extends Component
{
    use WithPagination;
    public $search;
    public function updateSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $user = User::where('firstName', 'Like', '%'.$this->search.'%')->orwhere('email', 'Like', '%'.$this->search.'%')
            ->paginate(10);
        return view('livewire.search-user', ['users' => $user]);
    }
}
