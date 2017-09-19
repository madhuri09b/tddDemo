<?php
namespace Phpreboot\Tddworkshop1;

use Phpreboot\Tddworkshop1\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    private $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function tearDown()
    {
        $this->calculator = null;
    }

    public function testAddReturnsAnInteger()
    {
        $result = $this->calculator->add();

        $this->assertInternalType('integer', $result, 'Result of `add` is not an integer.');
    }
	
	public function testAddWithoutParameterReturnsZero()
    {
        $result = $this->calculator->add();
        $this->assertSame(0, $result, 'Empty string on add do not return 0');
    }
	
	 public function testAddWithSingleNumberReturnsSameNumber()
    {
        $result = $this->calculator->add('3');
        $this->assertSame(3, $result, 'Add with single number do not returns same number');
    }
	
	public function testAddWithTwoParametersReturnsTheirSum()
    {
        $result = $this->calculator->add('2,4');

        $this->assertSame(6, $result, 'Add with two parameter do not returns correct sum');
    }
	
	public function testAddWithThreeParametersReturnsTheirSum()
    {
        $result = $this->calculator->add('2,4,4');

        $this->assertSame(10, $result, 'Add with three parameter do not returns correct sum');
    } 
	
	/**
     * @expectedException \InvalidArgumentException
     */
	public function testAddWithNonStringParameterThrowsException()
    {
        $this->calculator->add('5,a', 'Integer parameter do not throw error');
    }
}