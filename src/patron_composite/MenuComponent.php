<?php

namespace Php\Patrones\patron_composite;

abstract class MenuComponent
{

    public function getName()
    {
        throw new \Exception('Metodo no implementado');
    }

    public function getDescription()
    {
        throw new \Exception('Metodo no implementado');
    }

    public function getPrice()
    {
        throw new \Exception('Metodo no implementado');
    }

    public function isVegetarian()
    {
        throw new \Exception('Metodo no implementado');
    }

    public function print()
    {
        throw new \Exception('Metodo no implementado');
    }

    public function addComponent()
    {
        throw new \Exception ('Metodo no soportodo en un componente simple');
    }

    public function getChild($item)
    {
        throw new \Exception ('Metodo no soportodo en una componente simple');
    }

    public function getCost()
    {
        throw new \Exception('Metodo no implementado');
    }
}