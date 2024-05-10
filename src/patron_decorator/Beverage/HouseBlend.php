<?php

namespace Php\Patrones\patron_decorator\Beverage;

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