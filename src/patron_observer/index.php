<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Station</title>
</head>
<body>
<?php


use Php\Patrones\patron_observer\Displays\CurrentsConditionDisplay;
use Php\Patrones\patron_observer\Displays\HeatIndexDisplay;
use Php\Patrones\patron_observer\Displays\StaticsDisplay;
use Php\Patrones\patron_observer\DataProviders\WeatherData;

require_once (__DIR__ . '/../../vendor/autoload.php');

$weatherStation = new WeatherData();
$currentDisplay = new CurrentsConditionDisplay($weatherStation);
$staticDisplay = new StaticsDisplay($weatherStation);
$heatDisplay = new HeatIndexDisplay($weatherStation);

$weatherStation->setMeasurements(23,10,15);
$weatherStation->setMeasurements(21,10,15);
$weatherStation->setMeasurements(22,20,60);
?>
</body>
</html>

