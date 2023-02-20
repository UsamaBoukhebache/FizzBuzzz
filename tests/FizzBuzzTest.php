<?php

namespace Deg540\PHPTestingBoilerplate\Test;

class FizzBuzzTest
{
    public function returns_3_for_fizz()
    {
        $fizzBuzz = new FizzBuzz();

        $convertedNumber = $fizzBuzz->convert(3);

        $this->assertEquals('fizz', $convertedNumber);
    }

}