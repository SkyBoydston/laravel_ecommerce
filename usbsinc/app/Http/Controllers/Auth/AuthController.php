<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Company;
use App\Address;
use App\BusinessContact;
use App\PhoneNumber;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'business_name' => 'required|max:255|string',
            'website' => 'required|max:255|string',
            'type' => 'sometimes|max:255|string',
            'status' => 'sometimes|max:255|string',
            'address_line_1' => 'required|max:255|string',
            'address_line_2' => 'sometimes|max:255|string',
            'city' => 'required|max:255|string',
            'state' => 'required|max:255|string',
            'zip_code' => 'required|max:255|string',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'title' => 'required|max:255',
            'brands_of_interest' => 'required',
            // 'primary_phone' => 'required|max:255',
            // 'secondary_phone' => 'sometimes|max:255',
            'contact_primary_phone' => 'required|max:255',
            'contact_secondary_phone' => 'sometimes|max:255',
            'contact_me_via' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'how_heard_about' => 'sometimes',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        
        Company::create([
            'business_name' => $data['business_name'],
            'website' => $data['website'],
            'type' => $data['type'],
            'status' => $data['status'],
            'brands_of_interest' => is_array($data['brands_of_interest'])? implode(',', $data['brands_of_interest']) : $data['brands_of_interest'],
            'contact_me_via' => $data['contact_me_via'],
            'how_heard_about' => $data['how_heard_about'],
        ]);
        
        Address::create([
            'address_line_1' => $data['address_line_1'],
            'address_line_2' => $data['address_line_2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip_code' => $data['zip_code'],
        ]);

        BusinessContact::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'title' => $data['title'],
        ]);

        // PhoneNumber::create([
        //     'primary_phone' => $data['primary_phone'],
        //     'secondary_phone' => $data['secondary_phone'],
        // ]);

        PhoneNumber::create([
            'primary_phone' => $data['contact_primary_phone'],
            'secondary_phone' => $data['contact_secondary_phone'],
        ]);

        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);


        
    }
}
