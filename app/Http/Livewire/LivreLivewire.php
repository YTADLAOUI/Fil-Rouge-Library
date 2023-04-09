<?php

namespace App\Http\Livewire;

use App\Models\Livre;
use Livewire\Component;
use Livewire\WithPagination;

class LivreLivewire extends Component
{
    use WithPagination;
    public $search = '';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $livres= Livre::where('titre', 'like', '%'.$this->search.'%')->paginate(5);
        return view('livewire.livre-livewire')->with("livres",$livres);
    }
}
