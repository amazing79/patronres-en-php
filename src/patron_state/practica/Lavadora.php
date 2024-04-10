<?php

namespace Php\Patrones\patron_state\practica;

use Php\Patrones\patron_state\practica\States\Apagada;
use Php\Patrones\patron_state\practica\States\Encendida;
use Php\Patrones\patron_state\practica\States\Suspendida;

class Lavadora
{
    private $apagada;
    private $encendida;
    private $suspendida;

    private ILavadora $actualState;

    public function __construct()
    {
        $this->apagada = new Apagada($this);
        $this->encendida = new Encendida($this);
        $this->suspendida = new Suspendida($this);
        $this->actualState = $this->apagada;
    }

    /**
     * @return Apagada
     */
    public function getApagada(): Apagada
    {
        return $this->apagada;
    }

    /**
     * @return Encendida
     */
    public function getEncendida(): Encendida
    {
        return $this->encendida;
    }

    /**
     * @return Suspendida
     */
    public function getSuspendida(): Suspendida
    {
        return $this->suspendida;
    }


    public function setState(ILavadora $state)
    {
        $this->actualState = $state;
    }

    public function apagar()
    {
        $this->actualState->apagar();
    }

    public function encender()
    {
        $this->actualState->encender();
    }

    public function suspender()
    {
        $this->actualState->suspender();
    }

}