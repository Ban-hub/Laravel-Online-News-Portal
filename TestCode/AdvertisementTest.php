<?php

class AdvertisementTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $advertisement;

	public function setUp() : void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->advertisement = new \App\Models\advertisement;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testSetImage()
	{
		$this->advertisement->setImage('random.png');

		$this->assertEquals($this->advertisement->getImage(), 'random.png');
	}

	public function testSetTitle()
	{
		$this->advertisement->setTitle('Advertisement title');

		$this->assertEquals($this->advertisement->getTitle(), 'Advertisement title');
	}

	public function testSetLocation()
	{
		$this->advertisement->setLocation('Sidebar');

		$this->assertEquals($this->advertisement->getLocation(), 'Sidebar');
	}

	public function testSetUrl()
	{
		$this->advertisement->setUrl('advertisement-url.com');

		$this->assertEquals($this->advertisement->getUrl(), 'advertisement-url.com');
	}

	public function testSetStatus()
	{
		$this->advertisement->setStatus('Publish');

		$this->assertEquals($this->advertisement->getStatus(), 'Publish');
	}
}