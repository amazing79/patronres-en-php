<?php

namespace Php\Patrones\patron_decorator\Beverage;

use Php\Patrones\patron_decorator\Beverage\Beverage;

class HouseBlend extends Beverage
{

    public function __construct()
    {
        parent::__construct('HouseBlend');
    }

    public function cost(): float
    {
        return .89;
    }
}