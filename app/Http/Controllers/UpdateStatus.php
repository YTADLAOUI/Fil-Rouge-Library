<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpdateStatus extends Controller
{
    public function Update(Request $request, $id){
           $resarvation= Reservation::find($id);

           $resarvation->update([
            'status'=>$request->status,
            'dateEmprunt'=>$request->dateEmprunt,
            'datePreuveReturn'=>$request->datePreuveReturn,
            'dateDeReturn'=>$request->dateDeReturn
           ]);
        return redirect('/dashboard');
    }
}
