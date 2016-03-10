<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Address;

class AddressController extends Controller
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
        $address = User::findOrFail($id)->company->address->first(); 
        $address_id = $address->id;

        return view('address/edit', compact('address', 'address_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $address_id)
    {
        $address = Address::findOrFail($address_id);
        
        $address->update($request->all());

        return redirect('/admin_panel');
    }

    
}
