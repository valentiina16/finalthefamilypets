<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class PerfilUser extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    //public function scopeBuscarpor($query, $tipo, $buscar) {
      //  if ( ($tipo) && ($buscar) ){
       //     return $query->where($tipo,'like',"%$buscar%");

      //  }
  //  }



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre_usuario',
        'apellido',
        'direccion_usuario',
        'cedula',
        'celular_usuario',
        'foto_usuario',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relacion uno a muchos Donacion
    public function donaciones(){
        return $this->hasMany(Donation::class,'id_donation');

    }

    //relacion uno a muchos Fundacion
    public function fundacion(){
        return $this->hasMany(Foundation::class,'id_fun');

    }


}
 //public function scopeCedulas($query, $cedulas) {
     //   if ($cedulas) {
     //       return $query->where('cedula','like',"%$cedulas%");

      //  }
   // }
