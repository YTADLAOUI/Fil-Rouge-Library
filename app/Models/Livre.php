<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable=['titre','image','datePublication','quantite','categories_id','auteure_id','admin_id'];
    
}
