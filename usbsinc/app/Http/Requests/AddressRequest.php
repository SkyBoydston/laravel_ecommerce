<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Auth;

class AddressRequest extends Request
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
            'address_line_1' => 'required|max:255|string',
            'address_line_2' => 'sometimes|max:255|string',
            'city' => 'required|max:255|string',
            'state' => 'required|max:255|string',
            'zip_code' => 'required|max:255|string',
        ];
    }
}
