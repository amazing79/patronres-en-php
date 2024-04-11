<?php

namespace Php\Patrones\patron_state\book\States;

use Php\Patrones\patron_state\book\GumballMachine;

class HasQuarterState implements States
{
    private GumballMachine $machine;
    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }
    public function insertQuarter()
    {
        echo "<p>You can't insert another quarter at the same time</p>";
    }

    public function ejectQuarter()
    {
        echo "<p>Quarter returned</p>";
        $this->machine->setState($this->machine->getNoQuarter());
    }

    public function turnCrank()
    {
        echo "<p>You turned...</p>";
        $this->machine->setState($this->machine->getSold());
    }

    public function dispense()
    {
        echo "<p>No gumball dispensed</p>";
    }
}