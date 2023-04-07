<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Livre extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
    'titre',
    'image',
    'datePublication',
    'quantite_total',
    'quantite_calcul',
    'categories_id',
    'auteure_id',
    ];
    public function reservations(){
        return $this->hasOne(Reservation::class,'livre_id');
    }
    public function categories(){
        return $this->belongsTo(Categorie::class,'categories_id');
    }
    public function commentaires(){
        return $this->hasMany(Commentaire::class,'livre_id');
    }
    public function auteurs(){
        return $this->belongsTo(Auteure::class,'auteure_id');
    }
}
 