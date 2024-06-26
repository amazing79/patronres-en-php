<?php

namespace Php\Patrones\patron_decorator\Beverage;

class Decaf extends Beverage
{


    public function __construct()
    {
        $this->description = 'Decaf';
    }

    public function cost(): float
    {
        return 1.05;
    }

    function getDescription(): string
    {
        return $this->description;
    }
}