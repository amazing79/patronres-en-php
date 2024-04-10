<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lavadora State</title>
</head>
<body>
<?php

use Php\Patrones\patron_state\practica\Lavadora;

require_once (__DIR__ . '/../../../vendor/autoload.php');

$lavadora = new Lavadora();

$lavadora->suspender();
$lavadora->apagar();
$lavadora->encender();
$lavadora->encender();
$lavadora->suspender();
$lavadora->suspender();
$lavadora->apagar();
$lavadora->encender();
$lavadora->apagar();

?>
</body>
</html>

