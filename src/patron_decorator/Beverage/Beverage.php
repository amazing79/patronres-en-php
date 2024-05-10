<?php

namespace Php\Patrones\patron_decorator\Beverage;

abstract class Beverage
{
    protected $description;

    /**
     * @return mixed
     */
    abstract public function getDescription();

    abstract public function cost();

}