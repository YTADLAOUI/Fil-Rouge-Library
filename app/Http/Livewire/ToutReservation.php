<?php

namespace App\Http\Livewire;

use App\Models\Reservation;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ToutReservation extends Component
{
    use WithPagination;

    public $search = '';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    { 
        $reservations = Reservation::whereHas('users', function($query) {
            $query->where('name', 'like', '%'.$this->search.'%');
        })->paginate(4);
        return view('livewire.tout-reservation')->with('reservations',$reservations);
    }
}
