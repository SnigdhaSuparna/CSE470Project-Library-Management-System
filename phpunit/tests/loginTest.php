<?php

class loginTest extends \PHPUnit\Framework\TestCase
{
	
	protected $user;
	public function testEmail()
	{
		$login = new \App\login;

		$user->setFirstName('Snigdha');

		$login->setLastName('Suparna');

		$login->setEmail('SnigdhaSuparna@gmail.com');

		$emailVariables = $login->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'Snigdha Suparna');
		$this->assertEquals($emailVariables['email'], 'SnigdhaSuparna@gmail.com');
	}
}