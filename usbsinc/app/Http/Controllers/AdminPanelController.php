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
        if (!$user_phone_number == null) {
            $user_phone_number_id = $user_phone_number->id;
        } else {
            $user_phone_number_id = null;
        }
        
        $company = User::findOrFail($user_id)->company;
        if (!$company == null) {
            $company_id = $company->id;
        } else {
            $company_id = null;
        }
        
        
        $business_contact = User::findOrFail($user_id)->company->business_contact;
        if (!$business_contact == null) {
            $business_contact_id = $business_contact->id;
        } else {
            $business_contact_id = null;
        }
        

        $business_contact_phone_number = User::findOrFail($user_id)->company->business_contact->phone_number;
        if (!$business_contact_phone_number == null) {
            $business_contact_phone_number_id = $business_contact_phone_number->id;
        } else {
            $business_contact_phone_number_id = null;
        }
        
        
        $company_phone_number = User::findOrFail($user_id)->company->phone_number;
        if (!$company_phone_number == null) {
            $company_phone_number_id = $company_phone_number->id;
        } else {
            $company_phone_number_id = null;
        }
        
        $company_office_address = User::findOrFail($user_id)->company->address()->where([['company_id', Auth::user()->company->id], ['type', 'office']])->first();
        if (!$company_office_address == null) {
            $company_office_address_id = $company_office_address->id;
        } else {
            $company_office_address_id = null;
        }
        
        
        $company_default_shipping_address = User::findOrFail($user_id)->company->address()->where([['company_id', Auth::user()->company->id], ['type', 'default_shipping']])->first();
        if (!$company_default_shipping_address == null) {
            $company_default_shipping_address_id = $company_default_shipping_address->id;
        } else {
            $company_default_shipping_address_id = null;
        }
        

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
