<?php

namespace Php\Patrones\patron_command\Devices;

class Stereo
{
    public function on()
    {
        echo "<p>Stereo on</p>";
    }

    public function off()
    {
        echo "<p>Stereo off</p>";
    }

    public function setCd()
    {
        echo "<p>Stereo setCd</p>";
    }

    public function setDvd()
    {
        echo "<p>Stereo setDvd</p>";
    }

    public function setRadio()
    {
        echo "<p>Stereo setRadio</p>";
    }

    public function setVolume($value)
    {
        echo "<p>Stereo setVolume to {$value}</p>";
    }

}