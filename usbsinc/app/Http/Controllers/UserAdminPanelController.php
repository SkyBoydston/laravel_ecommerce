<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\User;



use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserAdminPanelController extends Controller
{
	
	/* Ensures the user is authenticated.
	

	*/
	public function __construct() {
		// $this->middleware('auth');
	}    

	/* Display our tabbed layout. Load up the data into it. 

	*/
	public function index() {
		// $user = User::where('userID', the logged in user)->get();
		return view('useradminpanel.blade.php'); //->compact($user);
	}

}
