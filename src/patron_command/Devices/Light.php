<?php

namespace Php\Patrones\patron_command\Devices;

class Light
{
    public function on():void
    {
        echo '<p>light on!</p>';
    }

    public function off():void
    {
        echo "<p>light off!</p>";
    }
}