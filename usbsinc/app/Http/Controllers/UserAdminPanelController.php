<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\UserAdminPanel;

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
		echo 'yo';
		// $users=db->$query->get(all);
		// return view('useradminpanel.blade.php')->compact($users);
	}

}
