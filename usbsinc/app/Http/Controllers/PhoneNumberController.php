<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PhoneNumberRequest;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\PhoneNumber;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App;

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
    public function store(PhoneNumberRequest $request)
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
    public function edit($phone_number_id)
    {
    
        // $id = Auth::user()->id;
        $phone_number = PhoneNumber::findOrFail($phone_number_id); 

        if (!($phone_number == Auth::user()->phone_number || $phone_number == Auth::user()->company->phone_number || $phone_number == Auth::user()->company->business_contact->phone_number)) {
            // throw new AccessDeniedHttpException("Not authorized.");
            // App::abort(403, 'Unauthorized action.');
            // App::error(function(AuthizationException $exception) {
                return 'You are not authorized for this action!';
            // });
        }
        // $phone_number_id = $phone_number->id;

        return view('phone_number/edit', compact('phone_number', 'phone_number_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhoneNumberRequest $request, $phone_number_id)
    {
        $phone_number = PhoneNumber::findOrFail($phone_number_id);
        
        $phone_number->update($request->all());

        return redirect('/admin_panel');
    }

}
