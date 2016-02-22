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
	public function index() {
		$users = User::all();

		return View::make('useradminpanel', compact('users'));
		// $user = User::where('userID', the logged in user)->get();
	}

}
