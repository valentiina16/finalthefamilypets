<?php

namespace App\Models;

use App\Filters\SearchFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preadoption extends Model
{
    use HasFactory;
    protected $fillable=['fecha_solic_inic','fecha_solic_final', 'hora_solic_inic','hora_solic_final'];

    public function scopeFilter(Builder $builder, $request)
        {
            return (new SearchFilter($request))->filter($builder);
        }

 

    public function users(){
        return $this->belongsTo (User::class,'id_user');
    
       }
}
