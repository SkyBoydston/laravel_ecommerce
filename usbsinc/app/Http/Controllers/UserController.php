<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;
use Redirect;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = Auth::user()->id;

        return Redirect::action('UserController@show', $id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id, $columns = array(   // These are being specified because otherwise things like password and brands of interest shows.
            'business_name',
            'business_website',
            'business_address_line_1',
            'business_address_line_2',
            'business_city',
            'business_state',
            'business_zip_code',
            'business_contact_first_name', 
            'business_contact_last_name',
            'business_contact_title', 
            'business_primary_phone',
            'business_secondary_phone',
            'business_contact_primary_phone',
            'business_contact_secondary_phone',
            'email'
            )); 


        return view('user/show', compact('user', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $user = User::where('id', $id)->first();  

        return view('user/edit', compact('user', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        
        $user->update($request->all());

        return redirect('user');

    }

    
}
