<?php

namespace App;

class book
{
    public $book_title;
    public $book_author;
    public $late_fine;
    public $difference;

    public function setValues($actualReturnDate, $currentDate)
    {
        $this->return_Date = $actualReturnDate;
        $this->current_Date = $currentDate;
    }
    
    public function getFineAmount()
    {
        $this->difference = $this->current_Date - $this->return_Date;
        
            $this->$late_fine = (difference/(60*60*24))*0.1;
        return $this->$late_fine;
    }

}
