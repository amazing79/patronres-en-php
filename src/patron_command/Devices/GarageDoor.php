<?php

namespace Php\Patrones\patron_command\Devices;

class GarageDoor
{
    public function up()
    {
        echo "<p>GarageDoor Up</p>";
    }

    public function down()
    {
        echo "GarageDoor Down";
    }

    public function stop()
    {
        echo "GarageDoor Stop";
    }

    public function lightOn()
    {
        echo "GarageDoor LightOn";
    }

    public function lightOff()
    {
        echo "GarageDoor LightOff";
    }
}