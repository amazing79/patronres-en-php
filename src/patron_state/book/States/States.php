<?php

namespace Php\Patrones\patron_state\book\States;

interface States
{
    public function insertQuarter();
    public function ejectQuarter();
    public function turnCrank();
    public function dispense();
}