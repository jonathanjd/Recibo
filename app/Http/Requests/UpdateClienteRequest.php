<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateClienteRequest extends Request
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
            'nombre' => 'min:3|max:50|required',
            'apellido' => 'min:3|max:50|required',
            'telefono_uno' => 'min:5|max:12|required',
            'telefono_uno' => 'min:5|max:12',
        ];
    }
}
