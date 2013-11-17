<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class Chore extends Ardent {

	public $autoPurgeRedundantAttributes = true;

	public function space()
	{
		return $this->belongsTo('Space');
	}
	
}