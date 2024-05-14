<?php

namespace Php\Patrones\patron_factory\Factories;

interface PizzaIngredientFactory
{
    public function createDough();
    public function createSauce();
    public function createCheese();
    public function createClam();
    public function createVeggies();
    public function createPepperoni();
}