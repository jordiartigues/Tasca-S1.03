<?php


/* forma mas simplificada
$numeros = [3, 5, 7, 9 , 11];
*/

/* forma mas elaborada: */


$numeros = [];

$numeros[]= 3;
$numeros[]= 5;
$numeros[]= 7;
$numeros[]= 9;
$numeros[]= 11;

for ($i = 0 ; $i < count($numeros); $i++){
    echo $numeros[$i] . "\n";
}

?>
