<?php

namespace Php\Patrones\patron_command;

use Php\Patrones\patron_command\Commands\NoCommand;

class RemoteControl
{
    const TOTAL_DEVICES = 7;
    private array $commandsOn;
    private array $commandsOff;

    public function __construct()
    {
        $noCommand = new NoCommand();
        for($i = 0; $i < self::TOTAL_DEVICES; $i++){
            $this->commandsOn[$i] = $noCommand;
            $this->commandsOff[$i] = $noCommand;
        }
    }

    public function setCommand(int $idx, $onCommand, $offCommand)
    {
        $this->commandsOn[$idx] = $onCommand;
        $this->commandsOff[$idx] = $offCommand;
    }

    public function onButtonWasPushed(int $idx)
    {
        $selectedCommand = $this->commandsOn[$idx];
        $selectedCommand->execute();
    }

    public function offButtonWasPushed(int $idx)
    {
        $this->commandsOff[$idx]->execute();
    }


}