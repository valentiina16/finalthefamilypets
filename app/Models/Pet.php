<?php

namespace App\Models;

use App\Filters\PetFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function scopeFilter(Builder $builder, $request)
        {
            return (new PetFilter($request))->filter($builder);
        }


    use HasFactory;

    protected $fillable = ['nombre_masc','edad_masc', 'raza_masc', 'tamaño_masc', 'sexo_masc', 'foto_masc1','foto_masc2','foto_masc3','foto_masc4', 'descripcion_masc','tipo_masc' ];

     //relacion uno a muchos (inversa) pets-mascotas
    public function fundacion(){
        return $this->belongsToMany(Foundation::class,'id_fun');

       }



        //relacion uno a muchos vacunas
        public function vacunas(){
            return $this->hasMany(Vaccinate::class,'id_vaccinate');

        }
        public function users(){
            return $this->belongsTo (User::class,'id_user');
        
           }
}
