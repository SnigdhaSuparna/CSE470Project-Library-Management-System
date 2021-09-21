<?php

namespace App;

class User
{
	public $book_name;
	public $author_name;
    public $book_id;



	public function setBookName($bookName)
	{
		$this->book_name = trim($bookName);

	}

	public function getbookName()
	{
		return $this->book_name;
	}


	public function setauthorName($authorName)
	{
		$this->author_name = trim($authorName);

	}

	public function getBookid()
	{
		return $this->book_id;
	}


}
