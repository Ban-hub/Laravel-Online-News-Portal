<?php

class PageTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $page;

	public function setUp() : void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->page = new \App\Models\page;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testSetTitle()
	{
		$this->page->setTitle('Page title');

		$this->assertEquals($this->page->getTitle(), 'Page title');
	}

	public function testSetDescription()
	{
		$this->page->setDescription('Random Paragraph');

		$this->assertEquals($this->page->getDescription(), 'Random Paragraph');
	}

	public function testSetSlug()
	{
		$this->page->setSlug('Page-slug');

		$this->assertEquals($this->page->getSlug(), 'Page-slug');
	}

	public function testSetStatus()
	{
		$this->page->setStatus('Publish');

		$this->assertEquals($this->page->getStatus(), 'Publish');
	}
}