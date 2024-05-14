<?php

namespace Php\Patrones\patron_factory\Factories;

use Php\Patrones\patron_factory\Products\Pizza;

Abstract class PizzaStore
{
    public function orderPizza($type): ?Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract protected function createPizza($type): ?Pizza;

}