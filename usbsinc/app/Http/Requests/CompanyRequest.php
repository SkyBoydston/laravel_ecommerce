<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Auth;

class CompanyRequest extends Request
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
            'business_name' => 'required|max:255|string',
            'website' => 'required|max:255|string',
            'status' => 'sometimes|max:255|string',
            'brands_of_interest' => 'required',
            'logo' => 'sometimes',
        ];
    }
}
