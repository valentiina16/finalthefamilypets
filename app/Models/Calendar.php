<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    static $rules=[

        'start'=>'required',
        'end'=>'required',
        'hora_inicio'=>'required',
        'hora_final'=>'required',
        
    ];

    protected $fillable=['start','end', 'hora_inicio','hora_inicio'];

      //relacion uno a muchos (inversa) fundacion
      public function fundacion(){
        return $this->belongsToMany(Foundation::class,'id_fun');

    }
}
