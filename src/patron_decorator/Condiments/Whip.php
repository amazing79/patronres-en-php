<?php

namespace Php\Patrones\patron_decorator\Condiments;

use Php\Patrones\patron_decorator\Beverage\Beverage;
use Php\Patrones\patron_decorator\Condiments\CondimentDecorator;

class Whip extends CondimentDecorator
{
    private Beverage $beverage;

    /**
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        parent::__construct("");
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .10;
    }

    public function description(): string
    {
        return $this->beverage->getDescription() . ", Whip";
    }
}