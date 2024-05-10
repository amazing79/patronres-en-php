<?php

namespace Php\Patrones\patron_decorator\Condiments;

use Php\Patrones\patron_decorator\Beverage\Beverage;

class Mocha extends CondimentDecorator
{
    private $beverage;

    /**
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }


    public function cost(): float
    {
        return $this->beverage->cost() + .20;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Mocha";
    }
}