<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

// Agrupamos bajo un prefijo v1 para mantener buenas prácticas de versionamiento.
// Por ahora solo exponemos 'store'; conforme se implementen los demás métodos
// del controller (index, show, update, destroy) se van agregando a ->only().
Route::prefix('v1')->group(function () {
    Route::apiResource('projects', ProjectController::class)->only(['store']);
});