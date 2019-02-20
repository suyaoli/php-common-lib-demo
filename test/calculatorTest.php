<?php
use Suyaoli\PhpCommonLibDemo\Calculator;

class TestCalculator extends PHPUnit_Framework_TestCase{


    public function testSelfAdd()
    {

        $calculator=new Calculator();

        $this->assertEquals(2, $calculator->selfAdd(1));
    }





}