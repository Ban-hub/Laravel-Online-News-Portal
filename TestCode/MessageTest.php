<?php

class MessageTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $message;

	public function setUp() : void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->message = new \App\Models\message;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testSetName()
	{
		$this->message->setName('NewAdmin');

		$this->assertEquals($this->message->getName(), 'NewAdmin');
	}

	public function testSetEmail()
	{
		$this->message->setEmail('new@admin.com');

		$this->assertEquals($this->message->getEmail(), 'new@admin.com');
	}

	public function testSetPhone()
	{
		$this->message->setPhone('132901');

		$this->assertEquals($this->message->getPhone(), '132901');
	}

	public function testSetMessage()
	{
		$this->message->setMessage('Publish the news');

		$this->assertEquals($this->message->getMessage(), 'Publish the news');
	}
}