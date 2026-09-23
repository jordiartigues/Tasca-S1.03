<?php


/* palabras sera el array
caracter sera la letra o caracter que queremos buscar */


function comprobarCaracter ($palabras, $caracter){

/* foreach = de la lista PALABRAS, pasa por cada elemento y guardala en $palabra */

foreach ($palabras as $palabra){
    
/* stripos busca $caracter dentro de $palabra y dime donde lo encuentras, si lo encuentra devuelve INDICE sino FALSE*/

/* ponemos === porque si el caracter esta en el indice 0 y solo tenemos == . 0 seria igual a falso y seria como que no lo hemos encontrado
asi nos aseguramos que solo da falso cuando no encuentra el caracter. el stripos daria false, que seria igual (===) a false, entonces confirmamos quen no lo hemos encontrado */

/* stripos no distingue entre may y min */
/* strpos si que distingue */

   if (stripos($palabra, $caracter) === false){
    return false;
   }
}
return true;
}

/* creamos array */

$palabras = ["hola", "Php", "Html"];

/* comprobamos con diferentes caracteres */

var_dump (comprobarCaracter($palabras, "h"));
var_dump (comprobarCaracter($palabras, "i"));



?>