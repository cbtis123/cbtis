<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HorarioRequest extends FormRequest
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
        'grupo_id' => 'required',
        'profesor_id' => 'required',
        'lunes_i' => 'required',
        'lunes_f' => 'required',
        'martes_i' => 'required',
        'martes_f' => 'required',
        'miercoles_i' => 'required',
        'miercoles_f' => 'required',
        'jueves_i' => 'required',
        'jueves_f' => 'required',
        'viernes_i' => 'required',
        'viernes_f' => 'required',
        ];
    }
}
