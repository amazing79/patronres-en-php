<?php

namespace Php\Patrones\patron_decorator\Beverage;

use Php\Patrones\patron_decorator\Beverage\Beverage;

class Decaf extends Beverage
{


    public function __construct()
    {
        parent::__construct('Decaf');
    }

    public function cost(): float
    {
        return 1.05;
    }
}