<?php

namespace Php\Patrones\patron_factory\Products\ChicagoStyle;

use Php\Patrones\patron_factory\Products\Pizza;

class ChicagoStyleCheesePizza extends Pizza
{

    public function __construct()
    {
        parent::__construct();
        $this->name = "Chicago Style Deep Dish Cheese Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum tomato Sauce";
        $this->toppings[] = "Shredded Mozzarella Cheese";
    }

    public function cut()
    {
        echo "<p>Cutting the Pizza in squares slices</p>";
    }
}