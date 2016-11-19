<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoordinadorRequest extends FormRequest
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
            'matricula' => 'required|max:100',
            'nombre' => 'required|max:100',
            'fecha_n' => 'required|date_format:"Y-m-d"',
            'curp' => 'required|max:18|min:18',
            'estado_c' => 'required',
            'colonia' => 'required|max:100',
            'cp' => 'required|max:10',
            'telefono_c' => 'required|max:10',
            'celular' => 'required|max:10'
        ];
    }
}
