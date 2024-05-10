<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbuzz Coffe</title>
</head>
<body>
<?php

use Php\Patrones\patron_decorator\Beverage\DarkRoast;
use Php\Patrones\patron_decorator\Beverage\Espresso;
use Php\Patrones\patron_decorator\Condiments\Mocha;
use Php\Patrones\patron_decorator\Condiments\Whip;

    require_once (__DIR__ . '/../../vendor/autoload.php');

    $beverage = new Espresso();
    echo "<p>Valor del cafe {$beverage->getDescription()} normal: \${$beverage->cost()}</p>";

    $beverage2 = new DarkRoast();
    $combinado = new Mocha($beverage2);
    $combinado = new Mocha($combinado);
    $combinado = new Whip($combinado);

    echo "<p>Valor del cafe combinado: {$combinado->getDescription()} : \${$combinado->cost()}</p>";
?>
</body>
</html>