<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nom'];
    
    public function branche(){
        return $this->hasMany(Branche::class);
    }
}
