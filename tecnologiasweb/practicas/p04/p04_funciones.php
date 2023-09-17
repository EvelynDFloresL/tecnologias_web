<?php
// Ejercicio 1 funcion
function multiplo($numero)
{
    if ($numero % 5 == 0 && $numero % 7 == 0) {
        echo "El número $numero es múltiplo de 5 y 7 <br>";
    } else {
        echo "El número $numero no es múltiplo de 5 y 7 <br>";
    }
}
// Ejercicio 2 funcion
function secuencia() {
    $matriz = [];
    $iteraciones = 0;

    while (true) {
        $numeros = [];
        for ($i = 0; $i < 3; $i++) {
            $num = rand(1, 100);
            $numeros[] = $num;
        }
        $iteraciones++;
        if ($numeros[0] % 2 == 1 && $numeros[1] % 2 == 0 && $numeros[2] % 2 == 1) {
            $matriz[] = $numeros;
            break;
        }
        $matriz[] = $numeros;
    }
    echo "Matriz de numeros: <br>";
    foreach ($matriz as $fila) {
        echo implode("\t", $fila) . "<br>";
    }
    echo "<br>Número de Iteraciones: $iteraciones";
    echo "<br>Cantidad de Números Generados: " . count($matriz) * 3;
}
// Ejercicio 3 funcion
function multiplo_aleatorio($nume) {
    // Bucle while
    $multiplo = 0;
    while (true) {
        $nm = rand(1, 100);
        if ($nm % $nume == 0) {
            $multiplo = $nm;
            break;
        }
    }
    echo "$multiplo es múltiplo de $nume con while";

    // Bucle do-while
    $multiplo = 0;
    do {
        $nm = rand(1, 100);
        if ($nm % $nume == 0) {
            $multiplo = $nm;
            break;
        }
    } while (true);
    echo "<br><br>$multiplo es múltiplo de $nume con do_while";
}






