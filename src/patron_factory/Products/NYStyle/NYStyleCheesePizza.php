<?php

namespace Php\Patrones\patron_factory\Products\NYStyle;

use Php\Patrones\patron_factory\Products\Pizza;

class NYStyleCheesePizza extends Pizza
{

    public function __construct()
    {
        parent::__construct();
        $this->name = "NY Style Sauce and Cheese Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marina Sauce";
        $this->toppings[] = "Grated Reggiano Cheese";
    }
}