<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Foundation extends Model
{
    use HasFactory, HasRoles;
   

    protected $fillable = ['nit_fundacion','nombre_fundacion','username_fundacion', 'contacto_fundacion', 'direccion_fundacion', 'email_fundacion', 'foto_fundacion','password_fundacion' ];

      //relacion uno a muchos (inversa) usuario
      public function usuario(){
        return $this->belongsToMany(User::class,'id_user');

    }

    //relacion uno a muchos con mascotas
    public function pets(){
        return $this->hasMany(Pet::class,'id_pet');

    }

     //relacion uno a muchos calenariod
     public function calendario(){
        return $this->hasMany(Calendar::class,'id_calendar');

    }
}
