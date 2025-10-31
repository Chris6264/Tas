<?php

use App\Http\Controllers\TasController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TasController::class,'tas_inicio']) -> name('tas_inicio');