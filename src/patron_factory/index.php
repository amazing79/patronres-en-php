<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Time</title>
</head>
<body>
<?php

use Php\Patrones\patron_factory\Factories\ChicagoPizzaStore;
use Php\Patrones\patron_factory\Factories\NYPizzaStore;
use Php\Patrones\patron_factory\Products\Types\PizzaTypes;

require_once (__DIR__ . '/../../vendor/autoload.php');

$nyFactory = new NYPizzaStore();
$chicagoFactory = new ChicagoPizzaStore();
echo "<h1>NY Pizza Store</h1>";
$nyPizza = $nyFactory->orderPizza(PizzaTypes::CHEZZE);
echo "<h1>Chicago Pizza Store</h1>";
$chicagoPizza = $chicagoFactory->orderPizza(PizzaTypes::CHEZZE);


?>
</body>
</html>