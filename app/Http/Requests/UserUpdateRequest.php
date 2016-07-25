<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use App\User;

class UserUpdateRequest extends Request
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

        $user = User::find($this->users);
        return [
            //
            'name' => 'min:4|max:100|required',
        ];
    }
}
