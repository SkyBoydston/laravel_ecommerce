<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



use \App\User;
use View;



use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserAdminPanelController extends Controller
{
	
	/* Ensures the user is authenticated.
	

	*/
	public function __construct() {
		$this->middleware('auth');
	}    

	/* Display our tabbed layout. Load up the data into it. 

	*/
	public function index(Request $request) {
	

		$user = User::where('id',$request->user()->id)->first();  

		return View::make('useradminpanel', compact('user'));
	}

	/* Allows the company to add/update information to its database record.


	*/
	public function update(Request $request) {
		
		User::where('id', $request->user()->id)
			->update(['business_name' => $request->business_name,
					  'business_website' => $request->business_website,
					  'business_type' => $request->business_type,
					  'business_status' => $request->business_status,
					  'business_address_line1' => $request->business_address_line1,
					  'business_address_line2' => $request->business_address_line2,
					  'business_city' => $request->business_city,
					  'business_state' => $request->business_state,
					  'business_zip_code' => $request->business_zip_code,
					  'brands_of_interest' => $request->brands_of_interest,
					  'business_contact_first_name' => $request->business_contact_first_name,
					  'business_contact_last_name' => $request->business_contact_last_name,
					  'business_contact_title' => $request->business_contact_title,
					  'business_primary_phone' => $request->business_primary_phone,
					  'business_secondary_phone' => $request->business_secondary_phone,
					  'business_contact_primary_phone' => $request->business_contact_primary_phone,
					  'business_contact_secondary_phone' => $request->business_contact_secondary_phone,
					  'email' => $request->email]);

		return redirect('/company');

	}

}
