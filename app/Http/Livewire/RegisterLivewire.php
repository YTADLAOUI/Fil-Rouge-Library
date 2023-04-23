<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class RegisterLivewire extends Component
{
    use WithPagination;

    public $search = '';
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        
        $users=User::where('name', 'like', '%'.$this->search.'%')->paginate(8);
        return view('livewire.register-livewire')->with('users',$users);
    }
}
