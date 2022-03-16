<?php

$mensaje = "Hello, World!";
echo $mensaje . "<br>";

//Convertir caràcters a majus
echo strtoupper($mensaje) . "<br>";

//longitud de la variable
echo strlen($mensaje) . "<br>";

//Invertir un String
echo strrev($mensaje) . "<br>";

$mensaje2 = "Aquest és el curs de PHP";

//concatenar i imprimir els dos String
echo $mensaje . " " . $mensaje2;
?>