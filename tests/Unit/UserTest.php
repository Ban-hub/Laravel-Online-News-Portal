<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $user;

	public function setUp() : void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->user = new \App\Models\User;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testSetName()
	{
		$this->user->setName('Alpha');

		$this->assertEquals($this->user->getName(), 'Alpha');
	}

	public function testSetEmail()
	{
		$this->user->setEmail('new@admin.com');

		$this->assertEquals($this->user->getEmail(), 'new@admin.com');
	}
}