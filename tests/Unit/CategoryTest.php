<?php

class CategoryTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $category;

	public function setUp() : void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->category = new \App\Models\category;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testSetTitle()
	{
		$this->category->setTitle('category title');

		$this->assertEquals($this->category->getTitle(), 'category title');
	}

	public function testSetSlug()
	{
		$this->category->setSlug('category-slug');

		$this->assertEquals($this->category->getSlug(), 'category-slug');
	}

	public function testSetStatus()
	{
		$this->category->setStatus('Publish');

		$this->assertEquals($this->category->getStatus(), 'Publish');
	}
}