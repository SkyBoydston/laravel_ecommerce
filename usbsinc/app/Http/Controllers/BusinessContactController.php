<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\BusinessContact;

class BusinessContactController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
    
        $id = Auth::user()->id;
        $business_contact = User::findOrFail($id)->company->business_contact; 
        $business_contact_id = $business_contact->id;

        return view('business_contact/edit', compact('business_contact', 'business_contact_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $business_contact_id)
    {
        $business_contact = BusinessContact::findOrFail($business_contact_id);
        
        $business_contact->update($request->all());

        return redirect('/admin_panel');
    }

}
