<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Station - With Interface</title>
</head>
<body>
<?php


use Php\Patrones\patron_observer\WithInterface\Displays\CurrentsConditionDisplay;
use Php\Patrones\patron_observer\WithInterface\Displays\HeatIndexDisplay;
use Php\Patrones\patron_observer\WithInterface\Displays\StaticsDisplay;
use Php\Patrones\patron_observer\WithInterface\Data\WeatherData;

require_once (__DIR__ . '/../../../vendor/autoload.php');

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

