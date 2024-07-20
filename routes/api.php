<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

  Route::post('/alta', [PersonaController::class, 'alta']); 
  Route::post('/baja', [PersonaController::class, 'baja']); 
  
;
