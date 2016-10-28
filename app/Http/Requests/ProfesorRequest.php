<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesorRequest extends FormRequest
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
            'nombre' => 'required|max:100',
            'apellido_p' => 'required|max:100',
            'apellido_m' => 'required|max:100',
            'fecha_n' => 'required|date_format:"Y-m-d"',
            'curp' => 'required|max:18|min:18',
            'horas' => 'required',
            'estado_c' => 'required',
            'clave_en' => 'required|max:100',
            'clave_mn' => 'required|max:100',
            'clave_mv' => 'required|max:100',
            'clave_lv' => 'required|max:100',
            'colonia' => 'required|max:100',
            'cp' => 'required|max:10',
            'telefono_c' => 'required|max:10',
            'celular' => 'required|max:10'
        ];
    }
}
