<?php

namespace Php\Patrones\patron_factory\Factories;

use Php\Patrones\patron_factory\Products\Pizza;
use Php\Patrones\patron_factory\Products\PizzaIngredient;

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

    public function orderPizzaWithIngredients($type): ?PizzaIngredient
    {
        $pizza = $this->createPizzaWithIngredients($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract protected function createPizza($type): ?Pizza;
    abstract protected function createPizzaWithIngredients($type): ?PizzaIngredient;

}