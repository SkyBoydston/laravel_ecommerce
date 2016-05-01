<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Auth;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::guest()) {

            return false;
        } else {
            return true;
        }


     
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = Auth::user()->id;

        return [
            'first_name' => 'required|max:255|string',
            'last_name' => 'required|max:255|string',
            
            'email' => 'required|email|max:255|unique:users,email,'.$id,

            'password' => 'required|confirmed|min:6',
        ];
    }
}
