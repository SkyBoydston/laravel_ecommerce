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
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        if (is_object($user)) {
            $company = User::findOrFail($id)->company;
            $business_contact = User::findOrFail($id)->company->business_contact;
            $phone_number = User::findOrFail($id)->company->phone_number;
            $address = User::findOrFail($id)->company->address()->where('company_id', Auth::user()->company->id)->first();
        } else {
            $company = null;
            $business_contact = null;
            $phone_number = null;
            $address = null;
        }


        return view('admin_panel/show', compact('user', 'company', 'business_contact', 'phone_number', 'address', 'id'));
    }


    

    
}
