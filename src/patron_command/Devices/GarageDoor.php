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
        echo "<p>GarageDoor Down</p>";
    }

    public function stop()
    {
        echo "<p>GarageDoor Stop</p>";
    }

    public function lightOn()
    {
        echo "<p>GarageDoor LightOn</p>";
    }

    public function lightOff()
    {
        echo "<p>GarageDoor LightOff</p>";
    }
}