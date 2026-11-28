<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CicloFormativoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'codigo_familia' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
            'grado' => ['required', 'in:basico,medio,superior'],
            'codigo' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'codigo_familia.required' => 'El código de familia es obligatorio.',
            'grado.required' => 'El grado es obligatorio.',
            'grado.in' => 'El grado debe ser básico, medio o superior.',
            'codigo.required' => 'El código es obligatorio.',
            'nombre.required' => 'El nombre es obligatorio.',
        ];
    }
}
