<?php

require_once 'Calc.php';

class CalcTest extends PHPUnit_Framework_TestCase
{
    public $calculator;

    protected function setUp()
    {
        $this->calculator = new Calc();
        $this->calculator->setNumA(4);
        $this->calculator->setNumB(2);
    }

    public function testPlus()
    {
        $this->setUp();
        $result = $this->calculator->numPlus();
        $this->assertEquals(6, $result);
    }

    public function testMin()
    {
        $this->setUp();
        $result = $this->calculator->numMin();
        $this->assertEquals(2, $result);
    }

    public function testDiv()
    {
        $this->setUp();
        $result = $this->calculator->numDiv();
        $this->assertEquals(2, $result);
    }

    public function testMul()
    {
        $this->setUp();
        $result = $this->calculator->numMul();
        $this->assertEquals(8, $result);
    }

    public function testSqRootA()
    {
        $this->setUp();
        $result = $this->calculator->sqRootA();
        $this->assertEquals(2, $result);
    }

    public function testSqRootB()
    {
        $this->setUp();
        $this->calculator->setNumB(9);
        $result = $this->calculator->sqRootB();
        $this->assertEquals(3, $result);
    }

    public function testMPlas()
    {
        $this->setUp();
        $this->calculator->setRem(5);
        $result = $this->calculator->mPlus(1);
        $this->assertEquals(9, $result);   
    }

     public function testMMinus()
    {
        $this->setUp();
        $this->calculator->setRem(5);
        $result = $this->calculator->mMinus(2);
        $this->assertEquals(3, $result);   
    }
     public function testPercen()
    {
        $this->setUp();
        $result = $this->calculator->percen(2);
        $this->assertEquals(0.02, $result);   
    }

    public function testValues()
    {
        $this->setUp();
        $result = $this->calculator->values(1, 2);
        $this->assertInternalType('array', $result);   
    } 
}

