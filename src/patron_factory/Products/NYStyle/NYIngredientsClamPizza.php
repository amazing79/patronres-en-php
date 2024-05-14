<?php

namespace Php\Patrones\patron_factory\Products\NYStyle;

use Php\Patrones\patron_factory\Factories\PizzaIngredientFactory;
use Php\Patrones\patron_factory\Products\PizzaIngredient;

class NYIngredientsClamPizza extends PizzaIngredient
{
    private $factory;

    /**
     * @param PizzaIngredientFactory $factory
     */
    public function __construct(PizzaIngredientFactory $factory)
    {
        parent::__construct();
        $this->name = "NY Clam pizza With NY Ingredients";
        $this->factory = $factory;
    }


    public function prepare()
    {
        echo "<p>Preparing {$this->name}</p>" ;
        $this->dough = $this->factory->createDough();
        $this->sauce = $this->factory->createSauce();
        $this->cheese = $this->factory->createCheese();
        $this->clams = $this->factory->createClam();
        echo "<p> Adding {$this->dough->description()}....";
        echo "<p> Adding {$this->sauce->description()}....";
        echo "<p> Adding {$this->cheese->description()}....";
        echo "<p> Finally, adding {$this->clams->description()}....";
    }
}