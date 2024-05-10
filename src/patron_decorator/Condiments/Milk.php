<?php

namespace Php\Patrones\patron_decorator\Condiments;

use Php\Patrones\patron_decorator\Beverage\Beverage;

class Milk extends CondimentDecorator
{
    private Beverage $beverage;

    /**
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }


    public function cost(): float
    {
        return $this->beverage->cost() + .10;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Milk";
    }
}