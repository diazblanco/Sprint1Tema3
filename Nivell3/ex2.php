<?php
$cadena = "Holopopo";
$array = str_split($cadena); //Convierto String en Array por seguir con el ejercicio anterior. 

print_r(array_count_values($array)); //array_count_values cuenta cuantas veces se repite cada elemento que forma el array. No uno en concret
var_dump($array);

?>