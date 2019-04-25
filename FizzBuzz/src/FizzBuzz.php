<?php
class FizzBuzz
{
    public function __construct($num)
    {
        $this->num = $num;
    }

    public function __toString()
    {
        if($this->isFizzBuzz()) return "FizzBuzz";
        if($this->isFizz()) return "Fizz";
        if($this->isBuzz()) return "Buzz";
        return (string)$this->num;
    }

    private function isFizz()
    {
        return $this->num % 3 == 0 || strpos((string)$this->num, '3') !== false;
    }

    private function isBuzz()
    {
        return $this->num % 5 == 0 || strpos((string)$this->num, '5') !== false;
    }

    private function isFizzBuzz()
    {
        return $this->isFizz() && $this->isBuzz();
    }
}