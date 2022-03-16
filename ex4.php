<?php
    $x = 25;
    $y = 13;
    $n = 24.53;
    $m = 85.36;

    function mostrarValor($variable){ //la función muestra un valor,por eso le pongo un echo y no un return
        //echo "el valor de '$variable' es $variable <br>";
        //echo "el valor de \$variable es $variable <br>";
        echo "el valor de la variable es $variable <br>";
    }
    function suma ($v1, $v2){ //las funciones que operan devuelven el resultado de la operación. Cuando llame al método ya decido si imprimo o qué hago
        return $v1 + $v2;
    }
    function resta ($v1, $v2){
        return $v1 + $v2;
    }
    function multiplicar ($v1, $v2){
        return $v1 * $v2;
    }
    function modulo ($v1, $v2){
        return $v1 % $v2;
    }
    echo "<h1> Variables 'x' e 'y'</h1>";
    mostrarValor($x);
    mostrarValor($y);
    echo suma($x,$y) . "<br>";
    echo resta($x,$y) . "<br>";
    echo multiplicar($x,$y) . "<br>";
    echo modulo($x,$y) . "<br>";

    echo "<h1> Variables 'n' y 'm'</h1>";
    mostrarValor($n);
    mostrarValor($m);
    echo suma($n,$m) . "<br>";
    echo resta($n,$m) . "<br>";
    echo multiplicar($n,$m) . "<br>";
    echo modulo($n,$m) . "<br>";

    function doble ($variable){
        return $variable * 2;
    }
    function sumaTotal ($v1, $v2, $v3, $v4){
        return $v1 + $v2 + $v3 + $v4;
    }
    function multiplicarTotal ($v1, $v2, $v3, $v4){
        return $v1 * $v2 * $v3 * $v4;
    }

    echo "<h1>Para todas las variables</h1>";
    echo "el doble de la variable es " . doble($x) . "<br>";
    echo doble($y) . "<br>";
    echo doble($n) . "<br>";
    echo doble($m) . "<br>";
    echo sumaTotal($x, $y, $n, $m) . "<br>";
    echo multiplicarTotal($x, $y, $n, $m) . "<br>";

?>