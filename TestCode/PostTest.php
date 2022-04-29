<?php

class PostTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $post;

	public function setUp() : void
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->post = new \App\Models\post;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		//$this->user = new \App\Models\User;(['email' => 'alex@codesource.com']);
		
	}


	public function testSetImage()
	{
		$this->post->setImage('random.png');

		$this->assertEquals($this->post->getImage(), 'random.png');
	}

	public function testSetTitle()
	{
		$this->post->setTitle('Post title');

		$this->assertEquals($this->post->getTitle(), 'Post title');
	}

	public function testSetDescription()
	{
		$this->post->setDescription('Random Paragraph');

		$this->assertEquals($this->post->getDescription(), 'Random Paragraph');
	}

	public function testSetSlug()
	{
		$this->post->setSlug('Post-slug');

		$this->assertEquals($this->post->getSlug(), 'Post-slug');
	}

	public function testSetCategory()
	{
		$this->post->setCategory('Random');

		$this->assertEquals($this->post->getCategory(), 'Random');
	}

	public function testSetStatus()
	{
		$this->post->setStatus('Publish');

		$this->assertEquals($this->post->getStatus(), 'Publish');
	}
}