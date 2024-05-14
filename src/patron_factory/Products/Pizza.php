<?php

namespace Php\Patrones\patron_factory\Products;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected array $toppings;

    public function __construct()
    {
        $this->toppings = array();
    }

    public function prepare()
    {
        echo "<p>Preparitin {$this->name}</p>" ;
        echo "<p>Tossing {$this->dough}</p>" ;
        echo "<p>Adding {$this->sauce}</p>" ;
        echo "<p>Adding Toppings</p>" ;
        foreach ($this->toppings as $topping) {
            echo "<p>{$topping}</p>" ;
        }
    }
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