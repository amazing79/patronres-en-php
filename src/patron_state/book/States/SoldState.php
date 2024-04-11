<?php

namespace Php\Patrones\patron_state\book\States;

use Php\Patrones\patron_state\book\GumballMachine;

class SoldState implements States
{
    private GumballMachine $machine;

    /**
     * @param GumballMachine $machine
     */
    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }

    public function insertQuarter()
    {
        echo "<p>Please wait, we're already giving a gumball.</p>";
    }

    public function ejectQuarter()
    {
        echo "<p>Sorry, you already turned the crank.</p>";
    }

    public function turnCrank()
    {
        echo "<p>Turning twice doesn't get you another gumball!.</p>";
    }

    public function dispense()
    {
        $this->machine->releaseBall();
        if($this->machine->getTotalGums() > 0) {
            $this->machine->setState($this->machine->getNoQuarter());
        } else {
            echo "<p>Oops, out of gumballs!</p>";
            $this->machine->setState($this->machine->getSoldOut());
        }
    }
}