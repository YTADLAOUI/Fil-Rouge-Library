<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResController extends Controller
{  
    public function index(){
        $userId=Auth::user()->id;
        // dd($userId);
         $reservation = Reservation::where('etudiant_id', $userId)
                ->with('livres.categories','livres.auteurs')
                ->get();
                // dd($reservation);
        return view('reservationPersonelle')->with('reservations',$reservation);
    }
    public function toutReservation(){
        $reservations=Reservation::with('users','livres.categories')->get();
        // dd($reservations);
        return view('dashboard')->with('reservations',$reservations);
    }
    
    public function reservation($id){
        $livre = Livre::find($id);
        // dd($livre->id);
        $reservationExistante = Reservation::where('livre_id', $livre->id)->where('etudiant_id', Auth::user()->id)->where('status', 'en attendant')->where('deleted_at',NULL)->first();
        // dd($reservationExistante);
        if($reservationExistante){
            return redirect('bibli/')->with('error', 'Vous avez déjà réservé ce livre en attente.');
        }else{
            Reservation::create([
                'dateReservation' => date('Y-m-d'),
                'etudiant_id' => Auth::user()->id,
                'livre_id' => $livre->id
            ]);
            return redirect('personelResrvation/')->with('success', 'Réservation effectuée avec succès.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::destroy($id);
        return redirect('personelResrvation/')->with('success', 'destroy effectuée avec succès.');
    }
}
