<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Company;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Redirect;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $companies = Company::all();

            return view('company.index', compact('companies'));
        } else {
            return redirect('company/'. Auth::user()->company->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // This causes bootstrap to show the right tab after redirecting (usually after updating, creating, or deleting a resource). Technically, it probably should be two vars since it applies the class 'in' to the tab header as well as the pane, but it doesn't seem to cause any problems, so I left it like this.
        $active = array_fill(0, 50, "");  
        $desired_tab = Input::get('tab');
        if ($desired_tab >= 1) {
            $active[$desired_tab] = 'in active';
        } else {
            $active[0] = 'in active';
        }


        $company = Company::findOrFail($id);
        

        if (Auth::user()->hasRole('admin')) {
            $user_id = $company->user()->where('role', 'company')->orWhere('role', 'pending')->orWhere('role', 'denied')->first()->id;
        } else {
            $user_id = Auth::user()->id;
        }


        
        $user = User::findOrFail($user_id);

        $user_phone_number = $user->phone_number;
        if (!$user_phone_number == null) {
            $user_phone_number_id = $user_phone_number->id;
        } else {
            $user_phone_number_id = null;
        }
        
        $company = User::findOrFail($user_id)->company;
        if (!$company == null) {
            $company_id = $company->id;
        } else {
            $company_id = null;
        }


        
        
        
        
        $business_contact = User::findOrFail($user_id)->company->business_contact;
        if (!$business_contact == null) {
            $business_contact_id = $business_contact->id;
        } else {
            $business_contact_id = null;
        }
        

        $business_contact_phone_number = User::findOrFail($user_id)->company->business_contact->phone_number;
        if (!$business_contact_phone_number == null) {
            $business_contact_phone_number_id = $business_contact_phone_number->id;
        } else {
            $business_contact_phone_number_id = null;
        }
        
        
        $company_phone_number = User::findOrFail($user_id)->company->phone_number;
        if (!$company_phone_number == null) {
            $company_phone_number_id = $company_phone_number->id;
        } else {
            $company_phone_number_id = null;
        }
        
        $company_office_address = User::findOrFail($user_id)->company->address()->where([['company_id', User::findOrFail($user_id)->company->id], ['type', 'office']])->first();
        if (!$company_office_address == null) {
            $company_office_address_id = $company_office_address->id;
        } else {
            $company_office_address_id = null;
        }
        
        
        $company_default_shipping_address = User::findOrFail($user_id)->company->address()->where([['company_id', User::findOrFail($user_id)->company->id], ['type', 'default_shipping']])->first();
        if (!$company_default_shipping_address == null) {
            $company_default_shipping_address_id = $company_default_shipping_address->id;
        } else {
            $company_default_shipping_address_id = null;
        }

        $categories = \DB::table('items')->select('category')->distinct()->get();
        $arrcategories = array();
        foreach ($categories as $category){
            $arrcategories[] .= $category->category;
        }

        // $price_mods = \App\Price::where('company_id', $company_id)->whereIn('category', $arrcategories)->get(); // Selects all price mods that belong to the company in question but only if the category field is filled in.
        $price_mods = $company->prices()->get(); 

        $agents = $company->user()->where('role', 'agent')->where('access_code', '')->get();  //  Shows approved, activated agents

        $transactions = $company->with('user.sale_documents')->findOrFail($company_id);
        

        return view('company.show', compact(
                        'active', 
                        'user', 'user_id',
                        'user_phone_number', 'user_phone_number_id',
                        'company', 'company_id', 
                        
                        'business_contact', 'business_contact_id', 
                        'business_contact_phone_number', 'business_contact_phone_number_id', 
                        'company_phone_number', 'company_phone_number_id', 
                        'company_default_shipping_address', 'company_default_shipping_address_id', 
                        'company_office_address', 'company_office_address_id',
                        'categories',  // Probably not necessary anymore
                        'price_mods',
                        'agents',
                        'transactions'
                        ));






        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if (Auth::user()->hasRole('admin')) {
        //     $user_id = $company->user()->where('role', 'company')->orWhere('role', 'pending')->orWhere('role', 'denied')->first()->id;
        // } else {
        //     $user_id = Auth::user()->id;
        // }
        // $id = Auth::user()->id;
        // $company = User::findOrFail($id)->company; 
        $company = Company::findOrFail($id); 
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


        $modName = $company->logo;
        if ($request->logo) {

            $logo = $request->logo;
            $origExtension = strtolower($logo->getClientOriginalExtension());
            if (in_array($origExtension, ['jpg', 'jpeg', 'png', 'bmp', 'gif', 'tiff'], true)) {
                $size = $logo->getClientSize();
                if ($size <= 1000000) {
                    if ($logo->isValid()) {
                        
                        $modName = 'logo_' . str_random(8) . $logo->getClientOriginalName();
                        $path = $_SERVER['DOCUMENT_ROOT'] . '/client_logo_files/';
                        $logo->move($path, $modName);
                    } else {
                        return $logo->getError();
                    }
                
                } else {
                    return Redirect::back()->withErrors(['Your file is too large.']);  // These errors can also be passed back in a better way (in a later version) if I use the Validator::make method and then something like $errors->add('logo', 'Your file is too large.')
                }
            } else {
                return Redirect::back()->withErrors(['Your file is not the correct type.']);
                // return 'Your file is not the correct type.';
            }
        }





        
        
        $company->update([
            'business_name' => $request->business_name,
            'website' => $request->website,
            'status' => $request->status,
            'brands_of_interest' => is_array($request->brands_of_interest)? implode(', ', $request->brands_of_interest) : $request->brands_of_interest,
            'logo' => $modName
            ]);

        return redirect('/company');
    }

   
}
