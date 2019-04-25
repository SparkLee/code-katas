<?php
include dirname(__DIR__)."/src/FizzBuzz.php";

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function fizzBuzzProvider()
    {
        return [
            ["1", 1],
            ["2", 2],
            ["Fizz", 3],
            ["Fizz", 6],
            ["Buzz", 5],
            ["FizzBuzz", 15],
            ["Fizz", 13],
            ["Buzz", 52],
            ["FizzBuzz", 51],
        ];
    }

    /**
     * @dataProvider fizzBuzzProvider
     */
    public function testFizzBuzz($expected, $num)
    {
        $this->assertEquals($expected, new FizzBuzz($num));
    }
}
