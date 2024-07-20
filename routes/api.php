<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::prefix('persona')->group(function (){
  Route::post('/alta', [PersonaController::class, 'alta']); 
  Route::post('/baja', [PersonaController::class, 'baja']);
  Route::post('/modificacion', [PersonaController::class, 'modificacion']);

});

=======
  Route::post('/alta', [PersonaController::class, 'alta']);
  Route::delete('/baja', [PersonaController::class, 'baja']);
  Route::put('/modificacion', [PersonaController::class, 'modificacion']);
  Route::get('/listado', [PersonaController::class, 'listado']);
;
>>>>>>> listado
