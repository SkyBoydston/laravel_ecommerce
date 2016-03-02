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


	// Route::get('/company', 'UserAdminPanelController@index');

	
    Route::get('/home', 'HomeController@index');

 //    Route::model('company', 'User');
	// Route::resource('company', 'UserAdminPanelController');

    Route::resource('user', 'UserController');


//     Route::group(['prefix' => 'company'], function () {
// //          Route::get('update', 'UserAdminPanelController@update');
// 			Route::get('/', 'UserAdminPanelController@index');

// 			Route::match(['get','post'],'/update', 'UserAdminPanelController@update');

	// });
});
