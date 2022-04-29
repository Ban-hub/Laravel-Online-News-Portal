<?php

class SettingsTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $settings;

	public function setUp() : void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->settings = new \App\Models\settings;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testSetImage()
	{
		$this->settings->setImage('random.png');

		$this->assertEquals($this->settings->getImage(), 'random.png');
	}

	public function testSetSocial()
	{
		$this->settings->setSocial('twitter.com/xyz');

		$this->assertEquals($this->settings->getSocial(), 'twitter.com/xyz');
	}

	public function testSetAbout()
	{
		$this->settings->setAbout('Random Paragraph');

		$this->assertEquals($this->settings->getAbout(), 'Random Paragraph');
	}
}