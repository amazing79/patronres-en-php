<?php

namespace Php\Patrones\patron_decorator\Beverage;

use Php\Patrones\patron_decorator\Beverage\Beverage;

class Espresso extends Beverage
{

    public function __construct()
    {
        parent::__construct('espresso');
    }

    public function cost(): float
    {
        return 1.99;
    }
}