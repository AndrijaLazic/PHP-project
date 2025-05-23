<?php

namespace App\Http\Controllers;

use App\Facades\PrvaFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PrviKontroler extends Controller
{
    public function helloWorld()
    {
        Log::info("Hello World");
        error_log('Some message here.');
        return PrvaFacade::prvaMetoda();
    }

    
}
