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
            'business_name' => 'required|max:255|string',
            'business_website' => 'required|max:255|string',
            'business_address_line_1' => 'required|max:255|string',
            'business_address_line_2' => 'sometimes|max:255|string',
            'business_city' => 'required|max:255|string',
            'business_state' => 'required|max:255|string',
            'business_zip_code' => 'required|max:255|string',
            'business_contact_first_name' => 'required|max:255',
            'business_contact_last_name' => 'required|max:255',
            'business_contact_title' => 'required|max:255',
            'business_primary_phone' => 'required|max:255',
            'business_secondary_phone' => 'sometimes|max:255',
            'business_contact_primary_phone' => 'required|max:255',
            'business_contact_secondary_phone' => 'sometimes|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id
        ];
    }
}
