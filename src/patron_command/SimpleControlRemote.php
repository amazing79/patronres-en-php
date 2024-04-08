<?php

namespace Php\Patrones\patron_command;

class SimpleControlRemote
{
    private ICommand $command;

    public function setCommand(ICommand $command)
    {
        $this->command = $command;
    }

    public function pressetButton()
    {
        $this->command->execute();
    }

}