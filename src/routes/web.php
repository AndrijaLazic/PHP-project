<?php

use App\Http\Controllers\PrviKontroler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [PrviKontroler::class, 'helloWorld']);