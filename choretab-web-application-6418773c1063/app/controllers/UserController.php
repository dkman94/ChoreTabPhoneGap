<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Auth Controller
	|--------------------------------------------------------------------------
	|
	| Responsible for handling user functionality.
	|
	*/

	public function getIndex()
	{
		$spaces = Auth::user()->getUserSpaces()->get();

		return View::make('user.dashboard', array('pageTitle' => 'My Dashboard', 'spaces' => $spaces));
	}

	public function getProfile($user_id)
	{
		$user = User::find($user_id);

		return View::make('user.profile', array('pageTitle' => $user->fullname(), 'user' => $user));
	}

}