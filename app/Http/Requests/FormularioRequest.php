<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormularioRequest extends FormRequest
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
     * Get the validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombre.required'    => 'Nombre obligatorio',
            'apellidos.required'    => 'Apellidos obligatorio',
            'telefono.required'    => 'Teléfono obligatorio',
            'direccion.required'    => 'Direccion obligatoria'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
        ];
    }
}
