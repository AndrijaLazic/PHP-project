<?php

namespace App\Http\Controllers;

use App\Facades\PrvaFacade;
use Illuminate\Http\Request;

class PrviKontroler extends Controller
{
    
    public function helloWorld()
    {
        return PrvaFacade::prvaMetoda();
    }

    
}
