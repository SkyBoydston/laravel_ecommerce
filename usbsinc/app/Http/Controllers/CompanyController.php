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
        
        $company->update($request->all());

        return redirect('/admin_panel');
    }

   
}
