<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;
use Redirect;
use Auth;

class AdminPanelController extends Controller
{
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);

        $user_phone_number = $user->phone_number;
        $user_phone_number_id = $user_phone_number->id;

        $company = User::findOrFail($user_id)->company;
        $company_id = $company->id;
        
        $business_contact = User::findOrFail($user_id)->company->business_contact;
        $business_contact_id = $business_contact->id;

        $business_contact_phone_number = User::findOrFail($user_id)->company->business_contact->phone_number;
        $business_contact_phone_number_id = $business_contact_phone_number->id;
        
        $company_phone_number = User::findOrFail($user_id)->company->phone_number;
        $company_phone_number_id = $company_phone_number->id;
        
        $company_office_address = User::findOrFail($user_id)->company->address()->where([['company_id', Auth::user()->company->id], ['type', 'office']])->first();
        $company_office_address_id = $company_office_address->id;
        
        $company_default_shipping_address = User::findOrFail($user_id)->company->address()->where([['company_id', Auth::user()->company->id], ['type', 'default_shipping']])->first();
        $company_default_shipping_address_id = $company_default_shipping_address->id;

        return view('admin_panel/show', compact(
                        'user', 'user_id',
                        'user_phone_number', 'user_phone_number_id',
                        'company', 'company_id', 
                        'business_contact', 'business_contact_id', 
                        'business_contact_phone_number', 'business_contact_phone_number_id', 
                        'company_phone_number', 'company_phone_number_id', 
                        'company_default_shipping_address', 'company_default_shipping_address_id', 
                        'company_office_address', 'company_office_address_id'
                        ));

    }

}
