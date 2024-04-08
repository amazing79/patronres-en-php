<?php

namespace Php\Patrones\patron_command\Commands;

use Php\Patrones\patron_command\Devices\GarageDoor;
use Php\Patrones\patron_command\ICommand;

class GarageDoorOpenCommand implements ICommand
{
    private GarageDoor $garageDoor;

    /**
     * @param GarageDoor $garageDoor
     */
    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }


    public function execute()
    {
        $this->garageDoor->up();
    }
}