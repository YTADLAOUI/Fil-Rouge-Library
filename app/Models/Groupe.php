<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable=['nom','branche_id'];
    public function branche(){
        return $this->belongsTo(Branche::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
}
