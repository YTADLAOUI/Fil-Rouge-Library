<?php

namespace App\Http\Livewire;

use App\Models\Livre;
use Livewire\Component;
use Livewire\WithPagination;

class BiblioLivewire extends Component
{
    
    use WithPagination;

    public $search = '';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    { 

        $livres= Livre::where('titre', 'like', '%'.$this->search.'%')->paginate(6);
        return view('livewire.biblio-livewire')->with("livres",$livres);
    }
}
