<?php

namespace Php\Patrones\patron_template_method;

use Php\Patrones\patron_template_method\CaffeineBeverageWithHook;

class Tea extends CaffeineBeverageWithHook
{

    public function brew()
    {
        echo "<p>Steeping the tea</p>";
    }

    public function addCondiments()
    {
        echo "<p>Adding Lemon</p>";
    }

}