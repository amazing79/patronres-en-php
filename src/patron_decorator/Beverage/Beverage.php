<?php

namespace Php\Patrones\patron_decorator\Beverage;

abstract class Beverage
{
    protected $description;

    /**
     * @param $description
     */
    public function __construct($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    abstract public function cost();

}