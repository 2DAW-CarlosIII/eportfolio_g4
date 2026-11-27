<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ModuloFormativoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
        'codigo_ciclo' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
        'nombre' => ['required', 'string', 'max:255'],
        'codigo' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
        'horas_totales' => ['required', 'integer', 'min:1', 'max:2000'],
        'curso_escolar' => ['nullable', 'in:PRIMERO,SEGUNDO'],
        'centro' => ['nullable', 'string', 'max:255'],
        'descripcion' => ['nullable', 'string'],
        ];
    }
    public function messages(): array
    {
        return [
            'codigo_ciclo.required' => 'El código del ciclo es obligatorio.',
            'nombre.required' => 'El nombre es obligatorio.',
            'codigo.required' => 'El código es obligatorio.',
            'horas_totales.required' => 'Las horas totales son obligatorias.',
            'horas_totales.integer' => 'Las horas totales deben ser un número entero.',
        ];
    }
}
