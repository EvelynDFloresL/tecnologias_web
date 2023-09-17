<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN” “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Práctica 4 </title>
</head>

<body>
    <?php
    include 'p04_funciones.php';
    ?>
    <div class="ejercicio1">
        <h2>Ejercicio 1</h2>
        <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</p>
        <?php
        $numero = $_GET['numero'];
        multiplo($numero);
        ?>
    </div>

    <div class="ejercicio2">
        <h2>Ejercicio 2</h2>
        <p>Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una secuencia.
            <br> Estos números deben almacenarse en una matriz de Mx3, donde M es el número de filas <br>
            y 3 el número de columnas. Al final muestra el número de iteraciones y la cantidad de números <br>
            generados: 12 números obtenidos en 4 iteraciones
        </p>

        <?php
        secuencia();
        ?>

    </div>

    <div class="ejercicio3">
        <h2>Ejercicio 3</h2>
        <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente, <br>
            pero que además sea múltiplo de un número dado. <br>
            * Crear una variante de este script utilizando el ciclo do-while. <br>
            * El número dado se debe obtener vía GET.</p>

        <?php
        $nume = $_GET['nume'];
        multiplo_aleatorio($nume);
        ?>
    </div>

    <div class="ejercicio4">
        <h2>Ejercicio 4</h2>
        <p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’ <br>
            a la ‘z’. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner <br>
            el valor en cada índice. <br>
            * Crea el arreglo con un ciclo for <br>
            * Lee el arreglo y crea una tabla en XHTML con echo y un ciclo foreach</p>

            <table style="border-collapse: collapse; width: 20%; height: 180px;" border="1">
            <?php
                ascii();
            ?>
    </div>


</body>

</html>