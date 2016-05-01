<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Address;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AddressRequest;

class AddressController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company_id = null;
        $type = null;

        if(Input::has('company_id')) {
            $company_id = (int)Input::get('company_id');
            
        } 
        if(Input::has('type')) {
            $type = Input::get('type');
            
        } 
        return view('address/create', compact('company_id', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressRequest $request)
    {
        
        
        // dd($request);
        Address::create($request->all());

        return redirect('/company');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($address_id)
    {
    
        $id = Auth::user()->id;
        $address = User::findOrFail($id)->company->address()->findOrFail($address_id); 
        // $address_id = $address->id;

        return view('address/edit', compact('address', 'address_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddressRequest $request, $address_id)
    {
        $address = Address::findOrFail($address_id);
        
        $address->update($request->all());

        return redirect('/company');
    }

    
}
