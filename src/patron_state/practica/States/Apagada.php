<?php

namespace Php\Patrones\patron_state\practica\States;

use Php\Patrones\patron_state\practica\Lavadora;

class Apagada implements \Php\Patrones\patron_state\practica\ILavadora
{
    private Lavadora $machine;

    /**
     * @param Lavadora $machine
     */
    public function __construct(Lavadora $machine)
    {
        $this->machine = $machine;
    }

    public function encender()
    {
        echo "<p>Es hora de lavar los trapos sucios</p>";
        $this->machine->setState($this->machine->getEncendida());
    }

    public function apagar()
    {
        echo "<p>Ya estoy apagada cabeza!</p>";
    }

    public function suspender()
    {
        echo "<p>Que queres suspender papacho? A ver, decime</p>";
    }
}