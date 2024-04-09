<?php

namespace Php\Patrones\patron_command\Commands;

use Php\Patrones\patron_command\Devices\Stereo;
use Php\Patrones\patron_command\ICommand;

class StereoOffWithCdCommand implements ICommand
{
    private Stereo $stereo;

    /**
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->setVolume(0);
        $this->stereo->off();
    }
}