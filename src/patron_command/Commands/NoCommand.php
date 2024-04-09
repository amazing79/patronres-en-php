<?php

namespace Php\Patrones\patron_command\Commands;

use Php\Patrones\patron_command\ICommand;

class NoCommand implements ICommand
{

    public function execute()
    {
        echo "<p>No command Assigned</p>";
    }
}