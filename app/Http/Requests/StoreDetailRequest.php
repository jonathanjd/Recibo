<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreDetailRequest extends Request
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
            'invoice_id' => 'required',
            'maquina' => 'required|min:2|max:25',
            'modelo' => 'required|min:2|max:25',
            'descripcion' => 'required|min:5|max:500',
            'abono' => 'required|digits_between:1,10',
            'costo' => 'required|digits_between:1,10',
            'estado' => 'required',
            'entregado' => 'required',

        ];
    }
}
