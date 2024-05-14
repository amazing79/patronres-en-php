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
    echo "<h3>NY Pizza Store</h3>";
    $nyPizza = $nyFactory->orderPizza(PizzaTypes::CHEZZE);
    echo "<h3>Chicago Pizza Store</h3>";
    $chicagoPizza = $chicagoFactory->orderPizza(PizzaTypes::CHEZZE);
    echo "<h3>NY Pizza Store and NY Ingredients</h3>";
    $nyPizza = $nyFactory->orderPizzaWithIngredients(PizzaTypes::CLAM);
    echo "<h3>NY Pizza Store and NY Ingredients</h3>";
    $nyPizza = $nyFactory->orderPizzaWithIngredients(PizzaTypes::CHEZZE);

?>
</body>
</html>