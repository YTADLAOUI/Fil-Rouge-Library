<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commentaire extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'content',
        'livre_id',
        'etudiant_id'
];
public function livres(){
    return $this->belongsTo(Livre::class);
}
public function users(){
    return $this->belongsTo(User::class,'etudiant_id');
}
}
