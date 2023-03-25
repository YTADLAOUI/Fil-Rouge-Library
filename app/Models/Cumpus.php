<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cumpus extends Model
{
    use HasFactory;
    protected $fillable=['nom'];
    public function promo(){
    return $this->hasMany(Promo::class);
    }
}
