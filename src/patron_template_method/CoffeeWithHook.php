<?php

namespace Php\Patrones\patron_template_method;

use Php\Patrones\patron_template_method\CaffeineBeverageWithHook;

class CoffeeWithHook extends CaffeineBeverageWithHook
{

    public function brew()
    {
        echo "<p>Dripping Coffe through filter</p>";
    }

    public function addCondiments()
    {
        echo "<p>Adding Sugar and Milk</p>";
    }

    protected function customerWantsCondiments(): bool
    {
        return rand(0,5) > 2;
    }
}