<?php

include 'Frog.php';
include 'Ape.php';

class Animal
{
	public $legs = 2 ;
	public $cold_blooded = false ;
	
	function __construct($name)
	{
		$this->name = $name;
	}

	public function get_legs($value='')
	{
		return $this->legs;
	}
	public function get_cold_blooded($value='')
	{
		return $this->cold_blooded;
	}

	public function set_legs($legs=0)
	{
		$this->legs=$legs;
	}
}