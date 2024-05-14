<?php

namespace Php\Patrones\patron_factory\Factories;

use Php\Patrones\patron_factory\Products\NYStyle\NYStyleCheesePizza;
use Php\Patrones\patron_factory\Products\NYStyle\NYStyleClamPizza;
use Php\Patrones\patron_factory\Products\NYStyle\NYStylePepperoniPizza;
use Php\Patrones\patron_factory\Products\NYStyle\NYStyleVeggiePizza;
use Php\Patrones\patron_factory\Products\Pizza;
use Php\Patrones\patron_factory\Products\Types\PizzaTypes;

class NYPizzaStore extends PizzaStore
{
    public function createPizza($type): ?Pizza
    {
        switch ($type){
          case PizzaTypes::CHEZZE:
              return new NYStyleCheesePizza();
          case PizzaTypes::CLAM:
              return new NYStyleClamPizza();
          case PizzaTypes::VEGGIE:
              return new NYStyleVeggiePizza();
          case PizzaTypes::PEPPERONI:
              return new NYStylePepperoniPizza();
          default:
                echo "<p>The selected Type is not Defined!</p>";
                return null;
        }
    }
}