<?php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class SearchFilter extends AbstractFilter
{
    protected $filters = [
        'id_user' => IdFilter::class
    ];
}