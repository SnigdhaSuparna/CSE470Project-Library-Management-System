<?php
class UserTest extends \PHPUnit\Framework\TestCase
{
	protected $user;

	


	public function testbook_name()
	{
		$this->book = new \App\book;

		$this->book->setbook_name('Digital Logic Design');

		$this->assertEquals($this->book->getbookName(), 'Digital Logic Design');
	}

	public function testauthorName()
	{
		$this->book = new \App\book;

		$this->book->setauthorName('B. Holdsworth');

		$this->assertEquals($this->book->getauthorName(), 'B. Holdsworth');
	}

	public function testBookID()
	{
		$book = new \App\book;

		$book->setBookid('5');


		$this->assertEquals($book->getBookid(), '5');
	}
}
