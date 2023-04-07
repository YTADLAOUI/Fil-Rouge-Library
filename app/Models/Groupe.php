<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Groupe extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['nom','branche_id'];
    public function branche(){
        return $this->belongsTo(Branche::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
}
