<?php 

# Ejercicio 1 Crea dos variables, réstalas y muestra el resultado #
    $dato1 = 10;
    $dato2 = 5;
    $resultado = $dato1 - $dato2;

    echo $resultado;

# Muestra los números del 1 al 10 en línea #
    // . Sirve para concatenar en PHP, en este caso el bucle for esta concatenando el resultado del array junto con un espacio en blanco.
    $numeros = [1,2,3,4,5,6,7,8,9,10];
    for($i = 0; $i<count($numeros);$i++){
    echo $numeros[$i].' ';
    }


    
?>