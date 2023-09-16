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
