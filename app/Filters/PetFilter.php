<?php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class PetFilter extends AbstractFilter
{
    protected $filters = [
        'tipo_masc' => TypeFilter::class
    ];
}