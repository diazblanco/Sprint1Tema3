<?php
    $array1 = array (54,63,1,85,38);
    $array2 = array (51,96,14);

    //Añadir elemento al final del array2
    array_push($array2,46);

    //combinar arrays e imprimir size
    echo "La mida de l'array resultant és: " . count(array_merge($array1,$array2)) . "<br>";

    //Antes he juntado dos arrays en uno al vuelo, sin almacenar el resultado en un nuevo 3er array.
    //ahroa creo el 3er array con la suma de los  anteriores por practicar
    $array3 = array_merge($array1,$array2);

    //imprimir el array valor a valor
    print_r($array3) . "<br>";

    //imprimir el array valor a valor utilizando for
    $contador = count($array3);
    for ($i = 0; $i<$contador; $i++){
        echo $array3[$i] . "<br>";
    }

?>