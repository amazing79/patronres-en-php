<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocolate Factory</title>
</head>
<body>
<?php

use Php\Patrones\patron_singleton\ChocoloteBoiler;

require_once (__DIR__ . '/../../vendor/autoload.php');
$chocolateBoiler = ChocoloteBoiler::getInstance();

$chocolateBoiler->fill();
$chocolateBoiler->boil();
if(!$chocolateBoiler->isEmpty()) {
    echo "<p>Hay Chocolate!</p>";
}
$chocolateBoiler->drain();

$otherChocolate = ChocoloteBoiler::getInstance();

$otherChocolate->drain();
if($chocolateBoiler->isEmpty()) {
    echo "<p>No hay Chocolate!</p>";
}

if($otherChocolate->isEmpty()) {
    echo "<p>No hay Chocolate en esta tampoco!</p>";
}

$otherChocolate->fill();
if(!$chocolateBoiler->isEmpty() && !$otherChocolate->isEmpty()) {
    echo "<p>Tenemos chocolate en todas!</p>";
}

?>
</body>
</html>