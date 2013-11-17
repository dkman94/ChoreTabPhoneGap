<?php

class ContentController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Contact Controller
	|--------------------------------------------------------------------------
	*/

	public function getIndex()
	{
		return View::make('index', array('pageTitle' => 'Welcome!'));
	}

}