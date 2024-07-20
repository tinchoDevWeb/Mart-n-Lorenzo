<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

Route::prefix('persona')->group(function (){
  Route::post('/alta', [PersonaController::class, 'alta']); 
  Route::post('/baja', [PersonaController::class, 'baja']);
  Route::post('/modificacion', [PersonaController::class, 'modificacion']);

});

