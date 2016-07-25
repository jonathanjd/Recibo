<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use App\User;

class UserRequest extends Request
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
            'name' => 'min:4|max:100|required',
            'email' => 'min:4|max:100|unique:users|required',
            'password' => 'min:4|max:120|required'
        ];
    }
}
