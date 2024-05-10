<?php

namespace Php\Patrones\patron_decorator\Beverage;

abstract class Beverage
{
    protected $description;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    abstract public function cost();

}