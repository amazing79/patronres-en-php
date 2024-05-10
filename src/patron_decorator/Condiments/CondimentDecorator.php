<?php

namespace Php\Patrones\patron_decorator\Condiments;

use Php\Patrones\patron_decorator\Beverage\Beverage;

abstract class CondimentDecorator extends Beverage
{
    abstract public function description();

}