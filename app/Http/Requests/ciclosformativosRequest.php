<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ciclosformativosRequest extends FormRequest
	{
    /** ¿Puede hacer esta petición? La autorización, en el Bloque 7. */
    public function authorize(): bool { return true; }
 
    public function rules(): array
    {
        return 
        ['codigo_familia' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
        'grado' => ['required', 'in:basico','medio','superior'],
        'codigo' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
        'nombre' => ['nullable', 'string'],
         ];
    }
 
    public function messages(): array
    {
        return ['nombre.required' => 'El nombre del proyecto es obligatorio.'];
    }
 
    public function attributes(): array { return ['fecha_fin' => 'fecha de fin']; }
}
