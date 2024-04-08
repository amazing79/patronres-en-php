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

use Php\Patrones\patron_command\Devices\GarageDoor;
use Php\Patrones\patron_command\Commands\GarageDoorOpenCommand;
use Php\Patrones\patron_command\SimpleControlRemote;
use Php\Patrones\patron_command\Commands\LightOnCommand;
use Php\Patrones\patron_command\Devices\Light;

$remote = new SimpleControlRemote();
$lightOn = new LightOnCommand(new Light());
$remote->setCommand($lightOn);
$remote->pressetButton();

$garageDoorOpen = new GarageDoorOpenCommand(new GarageDoor());

$remote->setCommand($garageDoorOpen);
$remote->pressetButton();

?>
</body>
</html>

