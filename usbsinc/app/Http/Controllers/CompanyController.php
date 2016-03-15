<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Company;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);

        return view('company/show', compact('company'));
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
        $company = User::findOrFail($id)->company; 
        $company_id = $company->id;

        return view('company/edit', compact('company', 'company_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $company_id)
    {
        $company = Company::findOrFail($company_id);
        
        $company->update([
            'business_name' => $request->business_name,
            'website' => $request->website,
            'status' => $request->status,
            'brands_of_interest' => is_array($request->brands_of_interest)? implode(', ', $request->brands_of_interest) : $request->brands_of_interest
            ]);

        return redirect('/admin_panel');
    }

   
}
