<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/


Route::group(array('before' => 'authenticate'), function()
{
	Route::get('user/{user_id}', 'UserController@getProfile')->where('user_id', '[0-9]+');	
	Route::controller('user', 'UserController');

	Route::get('space/{space_id}', 'SpaceController@getIndex')->where('space_id', '[0-9]+');	
	Route::controller('space', 'SpaceController');

	Route::get('chore/{chore_id}', 'ChoreController@getIndex')->where('chore_id', '[0-9]+');	
	Route::controller('chore', 'ChoreController');
});

Route::controller('auth', 'AuthController');
Route::controller('/', 'ContentController');

