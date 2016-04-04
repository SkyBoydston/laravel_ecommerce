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



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('user/set_password', 'UserController@setPasswordCreate'); // These need to come before the user resource route and be accessible to guests (because they're setting their passwords).
    Route::post('user/set_password', 'UserController@setPasswordStore');

	Route::get('/', function () {
		if (Auth::user()) {
		    return redirect('/member_cover');
		}
	    return view('public_site');
	});
	
	
    
	Route::group(['middleware' => 'auth'], function () {
		
	    Route::get('/member_cover', 'MemberCoverController@index');
	    Route::post('/member_cover', 'MemberCoverController@store');
	    Route::get('/member_cover/edit', 'MemberCoverController@edit');

	 

	    Route::get('user/reactivate/{user}', 'UserController@reactivate');  // This is necessary for agents that get rehired.
	    Route::resource('user', 'UserController',
	    	['except' => ['index']]);
	    Route::resource('company', 'CompanyController',
	    	['except' => ['create', 'store', 'destroy']]);
	    Route::resource('business_contact', 'BusinessContactController',
	    	['except' => ['index', 'create', 'store', 'destroy']]);
	    Route::resource('address', 'AddressController',
	    	['except' => ['index', 'destroy']]);
	    Route::resource('phone_number', 'PhoneNumberController',
	    	['except' => ['index', 'destroy']]);
	    Route::resource('agent', 'AgentController',
	    	['except' => [ 'create', 'store', 'destroy']]);

	    
	    // Route::resource('price', 'PriceController',
	    // 	['except' => ['index', 'create', 'store', 'destroy']]);
	    Route::resource('quote', 'QuoteController',
	    	['except' => ['destroy']]);
	    Route::resource('order', 'OrderController',
	    	['except' => ['create', 'store', 'destroy']]);
	    Route::resource('retail_quote', 'RetailQuoteController',
	    	['except' => ['create', 'store', 'destroy']]);

	    Route::get('item/search_and_add_to_sale_document/{sale_document_id}', 'ItemController@search_for_item');
	    Route::get('item/add_item_to_sale_document/{sale_document_id}/{item_id}', 'ItemController@add_item_to_sale_document');
	    Route::resource('item', 'ItemController',
	    	['except' => [  'destroy']]);  


	    Route::get('inbox', 'InboxController@index');
	    Route::get('inbox/confirm', 'InboxController@confirm');
	    Route::get('inbox/deny', 'InboxController@deny');
	    Route::get('inbox/history', 'InboxController@history');

	    

	});

	

});
