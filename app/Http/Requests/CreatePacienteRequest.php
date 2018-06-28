<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rut' => 'required|unique:pacientes,rut|max:12',
            'nombres' => 'required|min:3',
            'edad' => 'required|numeric|min:0',
            'apellidos' => 'required|min:3',
            'direccion' => 'required|min:3',
            'sector' => 'required',
            'sexo' => 'required',
        ];
    }
}
