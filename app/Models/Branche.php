<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branche extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'nom',
        'promo_id'
    ];
public function promo(){
    return $this->belongsTo(Promo::class);
}
public function groupes(){
    return $this->hasMany(Groupe::class);
}
}
