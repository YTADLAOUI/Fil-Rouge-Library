<?php

namespace App\Http\Livewire;

use App\Models\Commentaire as ModelsCommentaire;
use Livewire\Component;

class Commentaire extends Component
{
    public $LivreId;
    public $commentaire;
    public $updatecommentaire;

    public function store(){
        if($this->commentaire == null){
            return  session()->flash('alert', 'Commentaire text is requered!');
          }
          ModelsCommentaire::create(
              [
              'etudiant_id' => auth()->user()->id,
              'content' => $this->commentaire,
              'livre_id' => $this->LivreId,
          ]);
          $this->reset('commentaire');
    }
    public function render()
    {
        
    }
    
}
