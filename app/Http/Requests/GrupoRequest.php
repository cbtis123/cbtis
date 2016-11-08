<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrupoRequest extends FormRequest
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
            //
        'nombre' => 'required|unique:grupos,nombre',
        'especialidad_id' => 'required',
        'profesor_id' => 'required',
        'cuatrimestre' => 'required',
        'turno' => 'required'
        ];
    }
}
