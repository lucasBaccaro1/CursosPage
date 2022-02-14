<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'name' => 'required|min:10',
            'descripcion' => 'required',
            'categoria' => 'required'
        ];
    }

    public function atributes()
    {
        return[
            'name' =>'nombre del curso',
        ];
    }

    public function messages()
    {
        return[
            'descripcion.required' => 'Debes ingresar una descripcion'
        ];
    }
}
