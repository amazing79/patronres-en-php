<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GumballMachine State</title>
</head>
<body>
<?php

use Php\Patrones\patron_state\book\GumballMachine;

require_once (__DIR__ . '/../../../vendor/autoload.php');

$gumballMachine = new GumballMachine(1);

$gumballMachine->insertQuarter();
$gumballMachine->ejectQuarter();
$gumballMachine->ejectQuarter();
$gumballMachine->insertQuarter();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

?>
</body>
</html>
