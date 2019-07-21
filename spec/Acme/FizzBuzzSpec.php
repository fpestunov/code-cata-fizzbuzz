<?php

namespace spec\Acme;

use Acme\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FizzBuzz::class);
    }
}
