<?php

namespace Php\Patrones\patron_state\practica\States;

use Php\Patrones\patron_state\practica\Lavadora;

class Encendida implements \Php\Patrones\patron_state\practica\ILavadora
{
    private $machine;

    /**
     * @param $machine
     */
    public function __construct(Lavadora $machine)
    {
        $this->machine = $machine;
    }

    public function encender()
    {
        echo "<p>Ya esta encendida gil!</p>";
    }

    public function apagar()
    {
        echo "<p>Apagando la machine!!</p>";
        $this->machine->setState($this->machine->getApagada());
    }

    public function suspender()
    {
        echo "<p>Paso a suspender, porque cortan el agua o la luz</p>";
        $this->machine->setState($this->machine->getSuspendida());
    }
}