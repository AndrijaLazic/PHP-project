<?php

namespace App\Facades;

use App\Services\PrviServis;
use Illuminate\Support\Facades\Facade;

class PrvaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return PrviServis::class;
    }
}
