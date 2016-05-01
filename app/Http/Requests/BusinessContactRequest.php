<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Auth;

class BusinessContactRequest extends Request
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

        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'title' => 'required|max:255',
        ];
    }
}
