<?php

class ChoreController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Chore Controller
	|--------------------------------------------------------------------------
	|
	|
	*/

	public function getIndex($chore_id)
	{
		$chore = Chore::find($chore_id);

		return View::make('chore.index', array('pageTitle' => 'View Chore', 'chore' => $chore));
	}

	public function getAdd($space_id)
	{
		Session::put('choreIdTemp', $space_id);

		return View::make('chore.add', array('pageTitle' => 'Add a chore'));
	}

	public function postAdd()
	{
		$name = Input::get('name');
		$description = Input::get('description');
		$difficulty = Input::get('difficulty');

		$chore = new Chore;

		// MAJOR BUG - open to MISUSE.... people can add chores to other homes!!

		$chore->name = $name;
		$chore->description = $description;
		$chore->difficulty = $difficulty;
		$chore->space_id = Session::get('choreIdTemp');	

		Session::forget('choreIdTemp');

		$chore->save();

		return Redirect::to("chore/$chore->id");
	}

}