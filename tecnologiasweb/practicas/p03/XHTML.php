<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN” “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Práctica 3 </title>
</head>

<body>
    <h2> Ejercicio 1</h2>
    <p> 1. Determina cuál de las siguientes variables son válidas y explica por qué: </p>
    <p> $_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5 </p>
    <?php
    //AQUI VA MI CODIGO PHP 
    $_myvar;
    $_7var;
    //myvar;  Invalido
    $myvar;
    $var7;
    $_element1;
    //$house*5;  Invalido

    echo '<ul>';
    echo '<li> $_myvar es valida porque inicia con un guion bajo </li>';
    echo '<li> $_7var es valida porque inicia con un guion bajo </li>';
    echo '<li> $myvar es valida porque inicia con una letra </li>';
    echo '<li> $var7 es valida porque inicia con una letra </li>';
    echo '<li> $_element1 es valida porque inicia con un guion bajo </li>';
    echo '</ul>';
    ?>

    <h2>Ejercicio 2 </h2>
    <p> 2. Proporcionar los valores de $a, $b, $c como sigue: </p>
    <p> $a = “ManejadorSQL”;
        <br>$b = 'MySQL’;
        <br>$c = &$a;
    </p>


    <p>a. Ahora muestra el contenido de cada variable </p>
    <p><strong>Resultados:</strong></p>
    <?php
    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a;

    echo " a= $a <br>
    b=$b <br>
    c= $c <br>"
    ?>


    <p>b. Agrega al código actual las siguientes asignaciones:</p>
    <p> $a = “PHP server”;
        <br>$b = &$a;
    </p>
    <?php
    $a = "PHP server";
    $b = &$a;
    ?>
    <p> c. Vuelve a mostrar el contenido de cada uno </p>
    <p><strong>Resultados:</strong></p>
    <?php
    echo " a= $a <br>
    b=$b <br>
    c= $c <br>"
    ?>
    <p> <strong>d. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de asignaciones</strong></p>
    <p>En el primer resultado ya le habiamos asignado valores a las variables <br>
        asi solo mostramos su valor con un echo y la variable "c" toma el valor <br>
        de la variable "a". <br>
        En el segundo resultado a la variable "a" le cambiamos su valor y como "b" <br>
        hace referencia a la variable "a" como tambien "c" se muestra el mismo valor
    </p>
    <?php
    unset($a, $b, $c);
    ?>

    <h2>Ejercicio 3</h2>
    <p>3. Muestra el contenido de cada variable inmediatamente después de cada asignación, verificar<br>
        la evolución del tipo de estas variables (imprime todos los componentes de los arreglo): <br>
        $a = “PHP5”; <br>
        $z[] = &$a; <br>
        $b = “5a version de PHP”; <br>
        $c = $b*10; <br>
        $a .= $b; <br>
        $b *= $c; <br>
        $z[0] = “MySQL”;
    </p>

    <p><strong>Resultados:</strong></p>
    <?php
    $a = "PHP5";
    echo "a: $a <br>";

    $z[] = &$a;
    echo "z: ";
    var_dump($z);

    $b = "5a version de PHP";
    echo "<br> b: $b <br>";

    @$c = $b * 10;
    echo "c: $c <br>";

    $a .= $b;
    echo "a: $a <br>";

    @$b *= $c;
    echo "b: $b <br>";

    $z[0] = "MySQL";
    echo "z: ";
    var_dump($z);

    ?>

    <h2>Ejercicio 4</h2>
    <p>4. Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda <br>de la matriz $GLOBALS o del modificador global de PHP.</p>
    <p><strong>Resultados:</strong></p>

    <?php
    global $a, $b, $c, $z;
    echo "Valor de a: $a <br>";
    echo "Valor de b: $b <br>";
    echo "Valor de c: $c <br>";
    echo "Valor de z: ";
    var_dump($z);
    "<br>";
    unset($a, $b, $c, $z);
    ?>

    <h2>Ejercicio 5</h2>
    <p>Dar el valor de las variables $a, $b, $c al final del siguiente script:
        <br>$a = “7 personas”;
        <br>$b = (integer) $a;
        <br>$a = “9E3”;
        $c = (double) $a;
    </p>
    <p><strong>Resultados:</strong></p>
    <?php
    $a = "7 personas";
    $b = (int) $a;
    $a = "9E3";
    $c = (float) $a;

    echo "
    a: $a <br>
    b: $b <br>
    c: $c <br>
    <p>Las variables se van tomando dependiendo el tipo por ejemplo b toma los valores enteros de <br>
    a como podemos ver solo mostrará el 7.</p>";
    unset($a, $b, $c);
    ?>

    <h2>Ejercicio 6</h2>
    <p>6. Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas usando la función var_dump(<datos>). <br>
            Después investiga una función de PHP que permita transformar el valor booleano de $c y $e en uno que se pueda mostrar con un echo:
            <br> $a = “0”;
            <br> $b = “TRUE”;
            <br> $c = FALSE;
            <br> $d = ($a OR $b);
            <br> $e = ($a AND $c);
            <br> $f = ($a XOR $b);
    </p>
    <p><strong>Resultados:</strong></p>

    <?php
    $a = "0";
    $b = "TRUE";
    $c = FALSE;
    $d = ($a or $b);
    $e = ($a and $c);
    $f = ($a xor $b);

    echo '<ul>';
    echo '<li>$a: ';
    echo var_dump($a);
    echo '</li>';
    echo '<li>$b: ';
    echo var_dump($b);
    echo '</li>';
    echo '<li>$c: ';
    echo var_dump($c);
    echo '</li>';
    echo '<li>$d: ';
    echo var_dump($d);
    echo '</li>';
    echo '<li>$e: ';
    echo var_dump($e);
    echo '</li>';
    echo '<li>$f: ';
    echo var_dump($f);
    echo '</li>';
    echo '</ul>';

    echo 'Utilizamos boolval() para poder convertir los valores boleanos explícitos,
    luego los pasamos a representaciones de cadena con var_export() para luego mostrarlo. <br>';
    $c_bool = boolval($c);
    $e_bool = boolval($e);

    $c_string = var_export($c_bool, true);
    $e_string = var_export($e_bool, true);
    echo "c = $c_string";
    echo "<br>";
    echo "e = $e_string";

    ?>

    <h2>Ejercicio 7</h2>
    <p>7. Usando la variable predefinida $_SERVER, determina lo siguiente:
       <br> a. La versión de Apache y PHP,
       <br> b. El nombre del sistema operativo (servidor),
       <br> c. El idioma del navegador (cliente).
    </p>
    <p><strong>Resultados:</strong></p>

    <?php
        echo $_SERVER['SERVER_SIGNATURE'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        ?>

</body>

</html>