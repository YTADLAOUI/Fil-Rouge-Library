<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
    'dateReservation',
    'dateEmprunt',
    'datePreuveReturn',
    'dateDeReturn',
    'etudiant_id',
    'livre_id'
];
public function users(){
    return $this->belongsTo(User::class,'etudiant_id');
}
public function livres(){
    return $this->belongsTo(Livre::class,'livre_id');
}
}
