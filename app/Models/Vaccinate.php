<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccinate extends Model
{
    use HasFactory;

    public function vacunas(){
        return $this->belongsToMany(Vaccinate::class,'id_vaccinate');
    
        }
}
