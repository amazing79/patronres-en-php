<?php

namespace Php\Patrones\patron_factory\Products;

abstract class PizzaIngredient
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $cheese;
    protected $veggies;
    protected $peperoni;
    protected $clams;

    protected array $toppings;

    public function __construct()
    {
        $this->toppings = array();
    }

    abstract public function prepare();

    public function bake()
    {
        echo "<p>Bake for 25 minutes at 350</p>" ;
    }
    public function cut()
    {
        echo "<p>Cutting the pizza into diagonal slices</p>" ;
    }
    public function box()
    {
        echo "<p>Place Pizza in official Pizzatore Box</p>" ;
    }
}