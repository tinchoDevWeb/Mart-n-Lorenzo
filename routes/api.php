<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

  Route::post('/alta', [PersonaController::class, 'alta']);
  Route::delete('/baja', [PersonaController::class, 'baja']);
  Route::put('/modificacion', [PersonaController::class, 'modificacion']);
;
