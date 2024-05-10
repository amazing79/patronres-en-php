<?php

namespace Php\Patrones\patron_decorator\Beverage;

class DarkRoast extends Beverage
{


    public function __construct()
    {
        parent::__construct('Dark Roast');
    }

    public function cost(): float
    {
        return .99;
    }
}