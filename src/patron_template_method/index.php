<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugar Tea</title>
</head>
<body>
<?php
    use Php\Patrones\patron_template_method\CoffeeWithHook;
    use Php\Patrones\patron_template_method\Tea;

    require_once (__DIR__ . '/../../vendor/autoload.php');

    $aTea = new Tea();

    $aTea->prepareRecipe();

    $aCoffee = new CoffeeWithHook();

    $aCoffee->prepareRecipe();
?>
</body>
</html>