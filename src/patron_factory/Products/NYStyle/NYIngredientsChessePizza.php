<?php

namespace Php\Patrones\patron_factory\Products\NYStyle;

use Php\Patrones\patron_factory\Factories\PizzaIngredientFactory;
use Php\Patrones\patron_factory\Products\PizzaIngredient;

class NYIngredientsChessePizza extends PizzaIngredient
{
    private PizzaIngredientFactory $ingredientFactory;

    /**
     * @param PizzaIngredientFactory $ingredientFactory
     */
    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        parent::__construct();
        $this->name = "NY Chesse Pizza With NY Ingredients";
        $this->ingredientFactory = $ingredientFactory;
    }


    public function prepare()
    {
        echo "<p>Preparing {$this->name}</p>" ;
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        echo "<p> Adding {$this->dough->description()}....";
        echo "<p> Adding {$this->sauce->description()}....";
        echo "<p> Adding {$this->cheese->description()}....";
    }
}