<?php

namespace Php\Patrones\patron_template_method;

abstract class CaffeineBeverageWithHook
{
    final function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if($this->customerWantsCondiments()){
            $this->addCondiments();
        }
    }

    private function boilWater()
    {
        echo "<p>Boiling Water</p>";
    }

    public abstract function brew();

    private function pourInCup()
    {
        echo "<p>Pouring into cup</p>";
    }

    protected function customerWantsCondiments(): bool
    {
        return true;
    }

    public abstract function addCondiments();

}