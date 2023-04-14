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
    public function destroy($id){
        $comment = ModelsCommentaire::find($id);
        $comment->delete();
    }
    public function render()
    {
        $commentaires = ModelsCommentaire::where('livre_id',$this->LivreId)->with('users')->get();
        return view('livewire.commentaire',)->with('commentaires',$commentaires);
    }
    public function update($id){
        $commentaire = ModelsCommentaire::find($id);
        if($this->updatecommentaire == null){
            $commentaire = ModelsCommentaire::find($id);
            $commentaire->delete();
            return;
          }
        $commentaire->update(
            [
                'etudiant_id' => auth()->user()->id,
                'content' => $this->updatecommentaire,
                'livre_id' => $this->LivreId,
        ]);
        
    }
}
