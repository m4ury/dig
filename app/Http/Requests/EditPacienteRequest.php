<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPacienteRequest extends FormRequest
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
          'rut' => 'required|max:10',
          'nombres' => 'required|min:3|alpha',
          'edad' => 'required|numeric|min:0',
          'apellidos' => 'required|min:3|alpha',
          'direccion' => 'required|min:3',
          'sector' => 'required',
          'sexo' => 'required',
        ];
    }
}
