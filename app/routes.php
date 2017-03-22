<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::any('/', [
	"as"	=> "user/login",
	"uses"	=> "UserController@login"
]);

/*
* Private Access
*/

Route::group(['before' => 'auth'], function() {
	
	Route::any('dashboard', [
		"as" 	=> "dashboard/index",
		"uses"	=> "DashboardController@index"
	]);

	Route::resource('groups', 'GroupController');
	//Route::any("/groups", [
    //	"as"   => "groups/index",
    //	"uses" => "GroupController@indexAction"
	//]);

});

Route::any('/user/request', [
	"as"	=> "user/request",
	"uses"	=> "UserController@request"
]);
Route::any('user/reset/{token}', [
	"as"	=> "user/reset",
	"uses"	=> "UserController@reset"
]);
Route::any('/user/logout', [
	"as"	=> "user/logout",
	"uses"	=> "UserController@logout"
]);

