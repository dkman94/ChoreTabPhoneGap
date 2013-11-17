<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class Space extends Ardent {

	public $autoPurgeRedundantAttributes = true;

	public function users()
	{
		return $this->belongsToMany('User');
	}

	public function chores()
	{
		return $this->hasMany('Chore');
	}
	
}