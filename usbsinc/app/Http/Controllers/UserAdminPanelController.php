<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



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
	

		$user = User::where('id',$request->user()->id)->get();  

		return View::make('useradminpanel', compact('user'));
	}

	/* Allows the company to add/update information to its database record.


	*/
	public function update(Request $request) {
		dd($request);

	}

}
