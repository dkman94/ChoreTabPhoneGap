<?php

class AuthController extends BaseController {

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
		return Redirect::to('user');
	}

	public function getLogin()
	{
		return View::make('user.login', array('pageTitle' => 'Login to your account'));
	}

	public function getRegister()
	{
		return View::make('user.register', array('pageTitle' => 'Create a new account'));
	}

	public function postRegister()
	{
		$email = Input::get('email');

		$firstname = Input::get('firstname');
		$lastname = Input::get('lastname');

		$password = Input::get('password');
		$encryptPassword = Hash::make($password);

		$user = new User;

		$user->email = $email;
		$user->firstname = $firstname;
		$user->lastname = $lastname;
		$user->password = $encryptPassword;

		$user->save();

		return Redirect::to('auth/login')->withInput()->with('message', 'Account created! Login below.');
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('auth/login')->with('message', 'You have been logged out!');
	}

	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
	   		return Redirect::intended('user');
		}
		else
		{
			return Redirect::back()->withInput()->with('message', 'Login failed: Username/password combination does not exist.');
		}
	}

}