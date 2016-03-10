<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\PhoneNumber;

class PhoneNumberController extends Controller
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
