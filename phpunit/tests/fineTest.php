<?php

class FineTest extends \PHPUnit\Framework\TestCase
{
    protected $fine;

    public function fineTest()
    {
        //$fine = new \App\fine;

        $this->fine = new \App\fine;

        $this->fine->setValues(20210703, 20210727);
        
        $this->assertEquals($this->fine->getFineAmount(), 2.4);

    }

}