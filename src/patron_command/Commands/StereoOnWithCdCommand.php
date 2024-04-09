<?php

namespace Php\Patrones\patron_command\Commands;

use Php\Patrones\patron_command\Devices\Stereo;
use Php\Patrones\patron_command\ICommand;

class StereoOnWithCdCommand implements ICommand
{

    private $stereo;

    /**
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }


    public function execute()
    {
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(11);
    }
}