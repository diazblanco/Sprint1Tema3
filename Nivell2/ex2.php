<?php

//Paso a paso, imprimiendo cada uno:
// echo $cadena="wxyz"; //cadena original
// echo "<br>";
// echo $primerChar = substr($cadena, 0, 1); //w //Una manera de acceder a una posición concreta del string
// echo "<br>";
// echo $ultimoChar = substr($cadena, -1, 1); //z
// echo "<br>";
// echo $cadena [strlen($cadena)-1] = $primerChar; //otra manera de acceder a una posición concreta del string
// echo "<br>";
// echo $cadena;
// echo "<br>";
// echo $cadena [0] = $ultimoChar; //otra manera de acceder a una posición concreta del string.
// echo "<br>";
// echo $cadena;


$cadena="wxyz"; //cadena original
$primerChar = substr($cadena, 0, 1); //w
$ultimoChar = substr($cadena, -1, 1); //z

if (strlen($cadena) == 1){ //Si length ==1, imprimo sin hacer trabajar al programa
    echo $cadena;
} elseif (strlen($cadena) == 2){ //Si length ==2, invierto posiciones con strrev
    echo strrev($cadena);
} else { //Si length >=3, modifico 1ero por último i viceversa
    $cadena [strlen($cadena)-1] = $primerChar; 
    $cadena [0] = $ultimoChar;
    echo $cadena;
}
?>
