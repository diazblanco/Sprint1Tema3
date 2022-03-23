<?php
$cadena = "Hello world"; //Cadena original
$cadena = str_replace(" ", "", $cadena); //Remplazo espacio en blanco " " por nada "". Remplaza tantos espacios en blanco como encuentre
$array = str_split($cadena,1); // Para separar cadena caracter a caracter en un array, no sería necesario especificar la longitud del fragmento.

var_dump($array); //Muestra información sobre una variable
//print_r($array); //Imprime información legible para humanos sobre una variable
?>