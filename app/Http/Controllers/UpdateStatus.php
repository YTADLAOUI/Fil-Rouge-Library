<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpdateStatus extends Controller
{
    public function Update(Request $request, $id){
          
           $resarvation= Reservation::find($id);
           $idlivre=$resarvation->livre_id;
           $livre=Livre::find($idlivre);
           $resarvation->update([
            'status'=>$request->status,
            'dateEmprunt'=>$request->dateEmprunt,
            'datePreuveReturn'=>$request->datePreuveReturn,
            'dateDeReturn'=>$request->dateDeReturn
           ]);
           if($request->status=='return'){
            $reserve= $livre->quantite_calcul+1;
            $livre->update(['quantite_calcul'=>$reserve]);
           }
        return redirect('/dashboard');
    }
}
