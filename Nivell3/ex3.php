<?php

$array = array(10,20,30,40,50);

//Opción 1:
unset($array[3]); //Con unset elimino la posición del array que le paso. Pero no se reindexan las posiciones.
$array = array_values($array);
var_dump($array);

//Opción 2:
//array_splice($array, 3, 1); //array_splice elimina y reindexa automáticamente las posiciones del array, pero no cambia las claves asociativas



?>