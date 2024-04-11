<?php

namespace Php\Patrones\patron_state\book;

use Php\Patrones\patron_state\book\States\HasQuarterState;
use Php\Patrones\patron_state\book\States\NoQuarterState;
use Php\Patrones\patron_state\book\States\SoldOutState;
use Php\Patrones\patron_state\book\States\SoldState;
use Php\Patrones\patron_state\book\States\States;

class GumballMachine
{
    private SoldState $sold;
    private SoldOutState $soldOut;
    private NoQuarterState $noQuarter;
    private HasQuarterState $hasQuarter;
    private int $totalGums;
    protected States $state;

    public function __construct(int $totalGums)
    {
        $this->totalGums = $totalGums;
        $this->soldOut = new SoldOutState($this);
        $this->sold = new SoldState($this);
        $this->noQuarter = new NoQuarterState($this);
        $this->hasQuarter = new HasQuarterState($this);

        $this->state = $this->soldOut;
        if($this->totalGums > 0) {
            $this->state = $this->noQuarter;
        }
    }

    public function setState(States $newState)
    {
        $this->state = $newState;
    }

    public function getSold(): SoldState
    {
        return $this->sold;
    }

    public function getSoldOut(): SoldOutState
    {
        return $this->soldOut;
    }

    public function getNoQuarter(): NoQuarterState
    {
        return $this->noQuarter;
    }

    public function getHasQuarter(): HasQuarterState
    {
        return $this->hasQuarter;
    }

    public function getTotalGums(): int
    {
        return $this->totalGums;
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function releaseBall()
    {
        echo "<p>A gumball comes rolling out the slot...</p>";
        if ($this->totalGums > 0) {
            $this->totalGums--;
        }
    }
}