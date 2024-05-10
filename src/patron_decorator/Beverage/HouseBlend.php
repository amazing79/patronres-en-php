<?php

namespace Php\Patrones\patron_decorator\Beverage;

class HouseBlend extends Beverage
{

    public function __construct()
    {
        $this->description = 'HouseBlend';
    }

    public function cost(): float
    {
        return .89;
    }

    function getDescription(): string
    {
        return $this->description;
    }
}