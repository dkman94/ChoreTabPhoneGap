<?php

class SpaceController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Space Controller
	|--------------------------------------------------------------------------
	|
	|
	*/

	public function getIndex($space_id)
	{
		$space = Auth::user()->spaces->find($space_id);

		return View::make('space.index', array('pageTitle' => 'Space Dashboard', 'space' => $space));
	}

	public function getAdd()
	{
		return View::make('space.add', array('pageTitle' => 'Add a home'));
	}

	public function postAdd()
	{
		$spaceName = Input::get('name');

		Session::put('spaceName', $spaceName);

		return Redirect::to('space/add2');
	}

	public function getAdd2()
	{
		// TODO: Add roommates!
		return View::make('space.add_2', array('pageTitle' => 'Add a home Step 2', 'spaceName' => Session::get('spaceName')));
	}

	public function postAddfin()
	{
		$space = new Space;

		$space->name = Session::get('spaceName');

		Auth::user()->spaces()->save($space);

		return View::make('space.add_finish', array('pageTitle' => 'Success!', 'spaceName' => Session::get('spaceName'), 'space_id' => $space->id));
	}

}