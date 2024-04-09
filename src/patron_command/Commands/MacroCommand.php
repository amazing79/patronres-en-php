<?php

namespace Php\Patrones\patron_command\Commands;

use Php\Patrones\patron_command\ICommand;

class MacroCommand implements ICommand
{
    private $commands;

    /**
     * @param array $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }


    public function execute()
    {
        echo "<p>Activando varios commandos</p>";
       foreach ($this->commands as $command) {
           $command->execute();
       }
    }
}