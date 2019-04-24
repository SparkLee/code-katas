<?php
include "FizzBuzz.php";

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    public function testShouldReturn1WhenGiven1()
    {
        $this->assertEquals("1", new FizzBuzz(1));
    }

    public function testShouldReturnFizzWhenGiven3()
    {
        $this->assertEquals("Fizz", new FizzBuzz(3));
    }

    public function testShouldReturnFizzWhenGiven6()
    {
        $this->assertEquals("Fizz", new FizzBuzz(6));
    }

    public function testShouldReturnBuzzWhenGiven5()
    {
        $this->assertEquals("Buzz", new FizzBuzz(5));
    }

    public function testShouldReturnBuzzWhenGiven10()
    {
        $this->assertEquals("Buzz", new FizzBuzz(10));
    }

    public function testShouldReturnFizzBuzzWhenGiven15()
    {
        $this->assertEquals("FizzBuzz", new FizzBuzz(15));
    }

    public function testShouldReturnFizzWhenGiven13()
    {
        $this->assertEquals("Fizz", new FizzBuzz(13));
    }

    public function testShouldReturnBuzzWhenGiven52()
    {
        $this->assertEquals("Buzz", new FizzBuzz(52));
    }

    public function testShouldReturnFizzBuzzWhenGiven51()
    {
        $this->assertEquals("FizzBuzz", new FizzBuzz(51));
    }
}
