<?php
use App\User;


/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

	Route::get('/', function () {	
	    return view('welcome');
	});
	Route::get('/test', function(){
		return Auth::user()->role;
	});

	// Route::get('/company', 'UserAdminPanelController@index');

	
    Route::get('/home', 'HomeController@index');





    // Route::filter('isSelf', function($id) {
    // 	if (!$id==Auth::user()->id) {
    // 		return abort('Forbidden');
    // 	}

    // });

 //    Route::model('company', 'User');
	// Route::resource('company', 'UserAdminPanelController');
	Route::group(['middleware' => 'auth'], function () {
	    Route::resource('user', 'UserController',
	    	['except' => ['index', 'create', 'store', 'destroy']]);
	    Route::resource('company', 'CompanyController',
	    	['except' => ['index', 'create', 'store', 'destroy']]);
	    Route::resource('business_contact', 'BusinessContactController',
	    	['except' => ['index', 'create', 'store', 'destroy']]);
	    Route::resource('address', 'AddressController',
	    	['except' => ['index', 'destroy']]);
	    Route::resource('phone_number', 'PhoneNumberController',
	    	['except' => ['index', 'destroy']]);
	    Route::resource('agent', 'AgentController',
	    	['except' => ['index', 'create', 'store', 'destroy']]);
	    
	    Route::get('admin_panel/admin', 'AdminPanelController@admin');
	    Route::get('admin_panel/company_admin', 'AdminPanelController@company');
	    Route::get('admin_panel/agent_admin', 'AdminPanelController@agent');

	    Route::get('admin_panel', function(){
	    	if (Auth::user()->role == 'admin') {
	    		// $user = Auth::user();
	    		// dd($user);
	            return redirect('admin_panel/admin');
	        
	        } elseif (Auth::user()->role == 'company') {
	        
	            return redirect('admin_panel/company_admin');
	        
	        } elseif (Auth::user()->role == 'agent') {
	        
	            return redirect('admin_panel/agent_admin');
	        
	        }
	    });

	});
//     Route::group(['prefix' => 'company'], function () {
// //          Route::get('update', 'UserAdminPanelController@update');
// 			Route::get('/', 'UserAdminPanelController@index');

// 			Route::match(['get','post'],'/update', 'UserAdminPanelController@update');

	// });
});
