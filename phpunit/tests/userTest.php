<?php
class UserTest extends \PHPUnit\Framework\TestCase
{
	protected $user;

	


	public function testFirstName()
	{
		$this->user = new \App\user;

		$this->user->setFirstName('Snigdha');

		$this->assertEquals($this->user->getFirstName(), 'Snigdha');
	}

	public function testLastName()
	{
		$this->user = new \App\user;

		$this->user->setLastName('Suparna');

		$this->assertEquals($this->user->getLastName(), 'Suparna');
	}

	public function testFullName()
	{
		$user = new \App\user;

		$user->setFirstName('Snigdha');

		$user->setLastName('Suparna');

		$this->assertEquals($user->getFullName(), 'Snigdha Suparna');
	}

	public function testFirstAndLastName()
	{
		$user = new \App\user;

		$user->setFirstName('Snigdha     ');

		$user->setLastName('     Suparna');

		$this->assertEquals($user->getFirstName(), 'Snigdha');

		$this->assertEquals($user->getLastName(), 'Suparna');
	}
}