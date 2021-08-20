<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLenguaje extends FormRequest
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
            //validación
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ];
    }
    public function attributes()
    {
        return[
            'name' =>'nombre del lenguaje',
        ];
    }
     public function messages()
     {
         return[
             'descripcion.required' => 'Debe ingresar una descripcion del curso'
         ];
     }
}
