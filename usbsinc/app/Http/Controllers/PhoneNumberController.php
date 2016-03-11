<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\PhoneNumber;
use Illuminate\Support\Facades\Input;

class PhoneNumberController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = null;
        $company_id = null;
        $business_contact_id = null;

        if(Input::has('user_id')) {
            $user_id = (int)Input::get('user_id');
            
        } else if(Input::has('company_id')) {
            $company_id = (int)Input::get('company_id');
            
        } else if(Input::has('business_contact_id')) {
            $business_contact_id = (int)Input::get('business_contact_id');
            
        }
        return view('phone_number/create', compact('user_id', 'business_contact_id', 'company_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->user_id == '') {
            $user_id = null;
        } else {
            $user_id=(int)$request->user_id;
        }
        if ($request->company_id == '') {
            $company_id = null;
        } else {
            $company_id=(int)$request->company_id;
        }
        if ($request->business_contact_id == '') {
            $business_contact_id = null;
        } else {
            $business_contact_id=(int)$request->business_contact_id;
        }

        
        // dd($request);
        PhoneNumber::create([
                'user_id' => $user_id,
                'company_id' => $company_id,
                'business_contact_id' => $business_contact_id,
                'primary_phone' => $request->primary_phone,
                'secondary_phone' => $request->secondary_phone,
            ]);

        return redirect('/admin_panel');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
    
        $id = Auth::user()->id;
        $phone_number = User::findOrFail($id)->company->phone_number; 
        $phone_number_id = $phone_number->id;

        return view('phone_number/edit', compact('phone_number', 'phone_number_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $phone_number_id)
    {
        $phone_number = PhoneNumber::findOrFail($phone_number_id);
        
        $phone_number->update($request->all());

        return redirect('/admin_panel');
    }

}
