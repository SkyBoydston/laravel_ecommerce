<?php

namespace App\Http\Controllers\Auth;

use App\User;
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
            'business_type' => 'sometimes|max:255|string',
            'business_status' => 'sometimes|max:255|string',
            'business_address_line_1' => 'required|max:255|string',
            'business_address_line_2' => 'required|max:255|string',
            'business_city' => 'required|max:255|string',
            'business_state' => 'required|max:255|string',
            'business_zip_code' => 'required|max:255|string',
            'business_contact_first_name' => 'required|max:255',
            'business_contact_last_name' => 'required|max:255',
            'business_contact_title' => 'required|max:255',
            'brands_of_interest' => 'required',
            'business_primary_phone' => 'required|max:255',
            'business_secondary_phone' => 'sometimes|max:255',
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
        return User::create([
            'business_name' => $data['business_name'],
            'business_type' => $data['business_type'],
            'business_status' => $data['business_status'],
            'business_address_line_1' => $data['business_address_line_1'],
            'business_address_line_2' => $data['business_address_line_2'],
            'business_business_city' => $data['business_city'],
            'business_state' => $data['business_state'],
            'business_zip_code' => $data['business_zip_code'],

            'business_contact_first_name' => $data['business_contact_first_name'],
            'business_contact_last_name' => $data['business_contact_last_name'],
            'business_contact_title' => $data['business_contact_title'],
            'brands_of_interest' => is_array($data['brands_of_interest'])? implode(',', $data['brands_of_interest']) : $data['brands_of_interest'],
            'business_primary_phone' => $data['business_primary_phone'],
            'business_secondary_phone' => $data['business_secondary_phone'],
            'contact_me_via' => $data['contact_me_via'],
            'email' => $data['email'],
            'how_heard_about' => $data['how_heard_about'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
