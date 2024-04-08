<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu printer</title>
</head>
<body>
<?php

require_once('MenuItem.php');
require_once('Menu.php');

$breakfastMenu = new Menu('Super Menu', 'Puerto Mitre');

$unMenuItem = new MenuItem('Sanguche', 'Sanguche de milanesa, incluye fritas', 100.00);

$breakfastMenu->addComponent($unMenuItem);

$unMenuItem = new MenuItem('Egg Smash Potatos', 'Huevos Revueltos con papas', 50.00);

$breakfastMenu->addComponent($unMenuItem);

$unMenuItem = new MenuItem('Hot Cakes', 'Con miel o almibar', 25.00);

$breakfastMenu->addComponent($unMenuItem);

$desertBreakFast = new Menu('Sub Menu', 'Desert');

$dayDesert = new Menu('Day special', 'Desert');

$unMenuItem = new MenuItem('flan mixto', 'Crema y dulce', 75.00);

$dayDesert->addComponent($unMenuItem);

$unMenuItem = new MenuItem('flan', 'con dulce', 50.00);

$dayDesert->addComponent($unMenuItem);

/* otro Submenu desert */
$nightDesert = new Menu('Night special', 'Desert');

$unMenuItem = new MenuItem('Helado', 'Varios sabores', 25.00);

$nightDesert->addComponent($unMenuItem);

$unMenuItem = new MenuItem('Volcano', 'chocolate y helado', 50.00);

$nightDesert->addComponent($unMenuItem);
/* Fin */

$unMenuItem = new MenuItem('Coffe', 'american', 2.00);

$desertBreakFast->addComponent($unMenuItem);

$desertBreakFast->addComponent($dayDesert);

$desertBreakFast->addComponent($nightDesert);

$breakfastMenu->addComponent($desertBreakFast);
/* Otro menu principal */
$desertLunch = new Menu('Sub Menu', 'Lunch');

$unMenuItem = new MenuItem('Banana split', 'Banana, helado y dulce', 95.00);

$desertLunch->addComponent($unMenuItem);

$breakfastMenu->addComponent($desertLunch);
/* notar que se imprimen en orden que se agregan
$unMenuItem = new MenuItem('Hot Cakes', 'Con miel o almibar', 15.00);

$breakfastMenu->addComponent($unMenuItem);

 */
echo $breakfastMenu->print();
echo "El menu tiene un costo total \${$breakfastMenu->getCost()}";
echo '<br />';

try{
   $unMenuItem->addComponent($breakfastMenu);
}
catch(Exception $e){
    echo $e->getMessage();
}
?>  
</body>
</html>

