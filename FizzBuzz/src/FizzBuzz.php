<?php
class FizzBuzz
{
    private $val;

    public function __construct($val)
    {
        $this->val = $val;
    }

    public function __toString()
    {
        if($this->isFizzBuzz()) return 'FizzBuzz';
        if($this->isFizz()) return 'Fizz';
        if($this->isBuzz()) return 'Buzz';
        return (string)$this->val;
    }

    private function isFizz()
    {
        return $this->val % 3 == 0 || strpos($this->val, '3') !== false;
    }

    private function isBuzz()
    {
        return $this->val % 5 == 0 || strpos($this->val, '5') !== false;
    }

    private function isFizzBuzz()
    {
        return $this->isFizz() && $this->isBuzz();
    }
}