<?php

namespace Php\Patrones\patron_factory\Factories;

use Php\Patrones\patron_factory\Ingredients\NYIngredients\FreshClam;
use Php\Patrones\patron_factory\Ingredients\NYIngredients\MarinaSauce;
use Php\Patrones\patron_factory\Ingredients\NYIngredients\ReggianoCheese;
use Php\Patrones\patron_factory\Ingredients\NYIngredients\SlicedPeperoni;
use Php\Patrones\patron_factory\Ingredients\NYIngredients\SpicesVeggies;
use Php\Patrones\patron_factory\Ingredients\NYIngredients\ThinCrustDough;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough()
    {
        return new ThinCrustDough();
    }

    public function createSauce()
    {
        return new MarinaSauce();
    }

    public function createCheese()
    {
        return new ReggianoCheese();
    }

    public function createClam()
    {
        return new FreshClam();
    }

    public function createVeggies()
    {
        return new SpicesVeggies();
    }

    public function createPepperoni()
    {
        return new SlicedPeperoni();
    }
}