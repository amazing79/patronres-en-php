<?php

namespace Php\Patrones\patron_command\Commands;

use Php\Patrones\patron_command\Devices\Light;
use Php\Patrones\patron_command\ICommand;

class LightOffCommand implements ICommand
{
    private $light;

    /**
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }
}