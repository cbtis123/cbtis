<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalificacionRequest extends FormRequest
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
        'alumno_id' => 'required',
        'horario_id' => 'required',
        'parcial1' => 'required|integer|between:0,10',
        'parcial2' => 'required|integer|between:0,10',
        'ordinario' => 'required|integer|between:0,10'
        ];
    }
}
