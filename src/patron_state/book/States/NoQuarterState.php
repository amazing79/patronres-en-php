<?php

namespace Php\Patrones\patron_state\book\States;

use Php\Patrones\patron_state\book\GumballMachine;

class NoQuarterState implements States
{

    protected GumballMachine $machine;

    /**
     * @param GumballMachine $machine
     */
    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }

    public function insertQuarter()
    {
        echo "<p>You inserted a Quarter!</p>";
        $this->machine->setState(($this->machine->getHasQuarter()));
    }

    public function ejectQuarter()
    {
        echo "<p>You haven't inserted a Quarted!</p>";
    }

    public function turnCrank()
    {
        echo "<p>You turned, but there's no quarter</p>";
    }

    public function dispense()
    {
        echo "<p>You need to pay first!</p>";
    }
}