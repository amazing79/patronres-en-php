<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu printer</title>
</head>
<body>
<?php
require_once (__DIR__ . '/../../vendor/autoload.php');

use Php\Patrones\patron_command\Commands\GarageDoorOffCommand;
use Php\Patrones\patron_command\Commands\LightOffCommand;
use Php\Patrones\patron_command\Commands\StereoOffWithCdCommand;
use Php\Patrones\patron_command\Commands\StereoOnWithCdCommand;
use Php\Patrones\patron_command\Devices\GarageDoor;
use Php\Patrones\patron_command\Commands\GarageDoorOpenCommand;
use Php\Patrones\patron_command\Devices\Stereo;
use Php\Patrones\patron_command\RemoteControl;
use Php\Patrones\patron_command\SimpleControlRemote;
use Php\Patrones\patron_command\Commands\LightOnCommand;
use Php\Patrones\patron_command\Commands\MacroCommand;
use Php\Patrones\patron_command\Devices\Light;

/** Uso de un solo commando por vez **/
$remote = new SimpleControlRemote();
$lightOn = new LightOnCommand(new Light());
$remote->setCommand($lightOn);
$remote->pressetButton();

$garageDoorOpen = new GarageDoorOpenCommand(new GarageDoor());

$remote->setCommand($garageDoorOpen);
$remote->pressetButton();

/** Ahora contamos con un Control para varios commandos */
$lightOff = new LightOffCommand(new Light());
$garageDoorOff = new GarageDoorOffCommand(new GarageDoor());
$fullRemote = new RemoteControl();

$fullRemote->setCommand(0, $lightOn, $lightOff);
$fullRemote->setCommand(1, $garageDoorOpen, $garageDoorOff);

$fullRemote->onButtonWasPushed(0);
$fullRemote->onButtonWasPushed(1);
$fullRemote->offButtonWasPushed(0);
$fullRemote->offButtonWasPushed(1);
/** Pruebo el onButton en un slot no asignado. Al usar el noCommand, no debe hacer nada */
$fullRemote->onButtonWasPushed(2);
$fullRemote->offButtonWasPushed(2);
/** Ahora probamos como crear un comando que realize varios a la vez y como lo podemos reusar en el control */
//varios de encendido
$onCommands = [];
$onCommands[] = $lightOn;
$onCommands[] = $garageDoorOpen;
$onCommands[] = new StereoOnWithCdCommand(new Stereo());
//comandos de apagados
$offCommands = [];
$offCommands[] = $garageDoorOff;
$offCommands[] = $lightOff;
$offCommands[] = new StereoOffWithCdCommand(new Stereo());

$macroOn = new MacroCommand($onCommands);
$macroOff = new MacroCommand($offCommands);
$fullRemote->setCommand(4, $macroOn, $macroOff);

$fullRemote->onButtonWasPushed(4);
$fullRemote->offButtonWasPushed(4);
?>
</body>
</html>

