<?php

namespace Php\Patrones\patron_state\book\States;

use Php\Patrones\patron_state\book\GumballMachine;

class SoldOutState implements States
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
       echo "<p>You can't insert a quarter, the machine is sold out.</p>";
    }

    public function ejectQuarter()
    {
        echo "<p>You don't insert any quarter.</p>";
    }

    public function turnCrank()
    {
        echo "<p>You turned, but there are no gumballs.</p>";
    }

    public function dispense()
    {
        echo "<p>Sorry but the machine haven't more gumballs.</p>";
    }
}