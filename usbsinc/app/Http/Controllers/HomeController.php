<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Company;
use App\PhoneNumber;
use App\Address;
use App\BusinessContact;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_id = Auth::user()->id;



        $company = Company::where('user_id', null)->first();
        if ($company) {
            $company->user_id = $user_id;
            $company->save();
        }

        

        $company_id = Company::where('user_id', $user_id)->first()->id;



        $phoneNumber = PhoneNumber::where([['company_id', null],['business_contact_id', null],['user_id', null]])->first();
        if ($phoneNumber) {
            $phoneNumber->company_id = $company_id;
            $phoneNumber->save();
        }

        $address = Address::where('company_id', null)->first();
        if ($address) {
            $address->company_id = $company_id;
            $address->save();
        }

        $contact = BusinessContact::where('company_id', null)->first();
        if ($contact) {
            $contact->company_id = $company_id;
            $contact->save();
        }

        // dd(User::findOrFail(Auth::user()->id)
        //     ->company
        //     ->businessContact
        //     ->first_name);


        return view('home');
    }
}
