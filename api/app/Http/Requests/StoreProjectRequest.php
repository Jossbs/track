<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string', 'max:255'],
            
            'descripcion' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre del proyecto es obligatorio para continuar.',
            'nombre.max' => 'El nombre del proyecto no debe exceder los 255 caracteres.',
            'descripcion.string' => 'La descripción debe ser una cadena de texto válida.',
        ];
    }
}