<?php

namespace Php\Patrones\patron_factory\Factories;

use Php\Patrones\patron_factory\Products\ChicagoStyle\ChicagoStyleCheesePizza;
use Php\Patrones\patron_factory\Products\ChicagoStyle\ChicagoStyleClamPizza;
use Php\Patrones\patron_factory\Products\ChicagoStyle\ChicagoStylePepperoniPizza;
use Php\Patrones\patron_factory\Products\ChicagoStyle\ChicagoStyleVeggiePizza;
use Php\Patrones\patron_factory\Products\Pizza;
use Php\Patrones\patron_factory\Products\PizzaIngredient;
use Php\Patrones\patron_factory\Products\Types\PizzaTypes;

class ChicagoPizzaStore extends PizzaStore
{

    protected function createPizza($type): ?Pizza
    {
        switch ($type){
            case PizzaTypes::CHEZZE:
                return new ChicagoStyleCheesePizza();
            case PizzaTypes::CLAM:
                return new ChicagoStyleClamPizza();
            case PizzaTypes::VEGGIE:
                return new ChicagoStyleVeggiePizza();
            case PizzaTypes::PEPPERONI:
                return new ChicagoStylePepperoniPizza();
            default:
                echo "<p>The selected Type is not Defined!</p>";
                return null;
        }
    }

    protected function createPizzaWithIngredients($type): ?PizzaIngredient
    {
        return $this->createPizza($type);
    }
}