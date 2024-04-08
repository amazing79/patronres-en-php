<?php

namespace Php\Patrones\patron_composite;

class MenuItem extends MenuComponent {
    private $p_name ;
    private $p_price;
    private $p_description;
    private $p_isVegan;

    public function __construct($name, $description, $price, $vegan=false){
        $this->p_name = $name;
        $this->p_description = $description;
        $this->p_price = $price;
        $this->p_isVegan = $vegan;
    }

    public function getName(){
        return $this->p_name;
    }

    public function getDescription(){
        return $this->p_description;
    }

    public function getPrice(){
        return $this->p_price;
    }

    public function isVegetarian(){
        return $this->p_isVegan;
    }

    public function print(): string
    {
        // https://www.php.net/manual/es/language.types.string.php para ver porque funciona el escapado de esta cadena
        // En este caso, usa sintaxis compleja para analisis de variable
        $menu = "<li><strong>{$this->p_name}</strong>";
        $menu .= " - {$this->p_description} - \${$this->p_price}</li>";

        return $menu;
    }

    public function getCost(){
        return $this->getPrice();
    }

}