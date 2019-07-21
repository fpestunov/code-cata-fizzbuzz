<?php

namespace Acme;

class FizzBuzz
{
    public function execute($number)
    {
    	if ($number === 3) return 'fizz';

    	if ($number === 2) return 2;

        return 1;
    }
}
