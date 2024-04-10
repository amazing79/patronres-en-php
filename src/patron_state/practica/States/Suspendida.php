<?php

namespace Php\Patrones\patron_state\practica\States;

use Php\Patrones\patron_state\practica\Lavadora;

class Suspendida implements \Php\Patrones\patron_state\practica\ILavadora
{
    private Lavadora $machine;

    /**
     * @param Lavadora $lavadora
     */
    public function __construct(Lavadora $lavadora)
    {
        $this->machine = $lavadora;
    }

    public function encender()
    {
        echo "<p>Restaurando la machine!</p>";
        $this->machine->setState($this->machine->getEncendida());
    }

    public function apagar()
    {
        echo "<p>No se puede apagar!</p>";
    }

    public function suspender()
    {
        echo "<p>Que va a suspender, bo? Si ya esta suspendida</p>";
    }
}