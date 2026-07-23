<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    /**
     * Almacena un recurso recién creado en el almacenamiento.
     * 
     * Nota como inyectamos 'StoreProjectRequest' en lugar del 'Request' genérico.
     * Si el código llega a la primera línea de esta función, significa que 
     * los datos YA fueron validados exitosamente.
     */
    public function store(StoreProjectRequest $request)
    {
        // 1. Extraemos solo los datos validados y creamos el proyecto
        $project = Project::create($request->validated());

        // 2. Retornamos el proyecto envuelto en nuestro Resource
        // Laravel automáticamente le asignará un código HTTP 201 (Created)
        return new ProjectResource($project);
    }
}