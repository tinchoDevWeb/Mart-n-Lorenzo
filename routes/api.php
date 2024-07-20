<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;



  Route::post('/alta', [PersonaController::class, 'alta']); 
  Route::post('/baja', [PersonaController::class, 'baja']);
  Route::post('/modificacion', [PersonaController::class, 'modificacion']);
  Route::get('/listado', [PersonaController::class, 'listado']);
  Route::get('/busqueda', [PersonaController::class, 'busqueda']);

;
