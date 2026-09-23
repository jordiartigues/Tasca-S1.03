<?php

$numeros = [50, 60, 70, 80, 90, 100];

/* para contar cuantos elementos hay en el array */   

echo "El array se ha creado con " . count($numeros) . " elementos" . "\n";


/* para eliminar un elemento del array */

unset ($numeros[2]);

/* para reoganizar los indices, pq ahora el 2 no existe */
$numeros = array_values($numeros);



echo "El array ahora tiene " . count($numeros) . " elementos" . "\n";

/* recorremos la lista para que la enseñe */
for ($i = 0 ; $i < count($numeros); $i++){
    echo $numeros[$i] . "\n";
}


?>