<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'promo_id'
    ];
public function promo(){
    return $this->belongsTo(Promo::class);
}
public function groupe(){
    return $this->hasMany(Groupe::class);
}
}
