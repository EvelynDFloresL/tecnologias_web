<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
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
    <p>
        <br />$a = “ManejadorSQL”;
        <br />$b = 'MySQL’;
        <br />$c = &amp;$a;

    </p>


    <p>a. Ahora muestra el contenido de cada variable</p>
    <p><strong>Resultados:</strong></p>
    <pre>
    <?php
    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a;
    echo "\na= $a\nb= $b\nc= $c\n";
    ?>
    </pre>

    <p>b. Agrega al código actual las siguientes asignaciones:</p>
    <p>$a = “PHP server”;</p>
    <p>$b = &amp;$a;</p>

    <?php
    $a = "PHP server";
    $b = &$a;
    ?>

    <p> c. Vuelve a mostrar el contenido de cada uno </p>
    <p><strong>Resultados:</strong></p>
    <div>
        <?php
        echo " a= $a <br />
        b= $b <br />
        c= $c <br />";
        ?>
    </div>




    <p> <strong>d. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de asignaciones</strong></p>
    <p>En el primer resultado ya le habiamos asignado valores a las variables <br />
        asi solo mostramos su valor con un echo y la variable "c" toma el valor <br />
        de la variable "a". <br />
        En el segundo resultado a la variable "a" le cambiamos su valor y como "b" <br />
        hace referencia a la variable "a" como tambien "c" se muestra el mismo valor
    </p>
    <?php
    unset($a, $b, $c);
    ?>

    <h2>Ejercicio 3</h2>
    <p>3. Muestra el contenido de cada variable inmediatamente después de cada asignación, verificar <br />
        la evolución del tipo de estas variables (imprime todos los componentes de los arreglo): <br />
        $a = “PHP5”; <br />
        $z[] = &amp;$a; <br />
        $b = “5a version de PHP”; <br />
        $c = $b*10; <br />
        $a .= $b; <br />
        $b *= $c; <br />
        $z[0] = “MySQL”;
    </p>
    <div>
        <p><strong>Resultados:</strong></p>
        <?php
        //Código PHP
        $a = "PHP5";
        echo "Contenido de \$a: $a <br />";
        $z[] = $a;
        echo "Contenido de \$z: ";
        print_r($z);
        $b = "5a versión de PHP";
        echo "Contenido de \$b: $b <br />";
        @$c = $b * 10;
        echo "Contenido de \$c: $c <br />";
        @$a .= $b;
        echo "Contenido de \$a: $a <br />";
        @$b *= $c;
        echo "Contenido de \$b: $b <br />";
        $z[0] = "MySQL";
        echo "Contenido de \$z: ";
        print_r($z);
        ?>
    </div>

    <h2>Ejercicio 4</h2>
    <p>4. Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda <br />de la matriz $GLOBALS o del modificador global de PHP.</p>
    <p><strong>Resultados:</strong></p>
    <div>
        <?php
        global $a, $b, $c, $z;
        echo "Valor de a: $a <br />";
        echo "Valor de b: $b <br />";
        echo "Valor de c: $c <br />";
        echo "Valor de z: ";
        var_dump($z);
        "<br />";
        unset($a, $b, $c, $z);
        ?>
    </div>
    <h2>Ejercicio 5</h2>
    <p>Dar el valor de las variables $a, $b, $c al final del siguiente script:
        <br />$a = “7 personas”;
        <br />$b = (integer) $a;
        <br />$a = “9E3”;
        $c = (double) $a;
    </p>
    <p><strong>Resultados:</strong></p>
    <div>
        <?php
        $a = "7 personas";
        $b = (int) $a;
        $a = "9E3";
        $c = (float) $a;

        echo "
    a: $a <br />
    b: $b <br />
    c: $c <br />
    <p>Las variables se van tomando dependiendo el tipo por ejemplo b toma los valores enteros de <br />
    a como podemos ver solo mostrará el 7.</p>";
        unset($a, $b, $c);
        ?>
    </div>

    <h2>Ejercicio 6</h2>
    <p>6. Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas usando la función var_dump(datos). <br />
        Después investiga una función de PHP que permita transformar el valor booleano de $c y $e en uno que se pueda mostrar con un echo:
        <br /> $a = “0”;
        <br /> $b = “TRUE”;
        <br /> $c = FALSE;
        <br /> $d = ($a OR $b);
        <br /> $e = ($a AND $c);
        <br /> $f = ($a XOR $b);
    </p>
    <p><strong>Resultados:</strong></p>
    <div>
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
    luego los pasamos a representaciones de cadena con var_export() para luego mostrarlo. <br />';
        $c_bool = boolval($c);
        $e_bool = boolval($e);

        $c_string = var_export($c_bool, true);
        $e_string = var_export($e_bool, true);
        echo "c = $c_string";
        echo "<br />";
        echo "e = $e_string";

        ?>
    </div>
    <h2>Ejercicio 7</h2>
    <p>7. Usando la variable predefinida $_SERVER, determina lo siguiente:
        <br /> a. La versión de Apache y PHP,
        <br /> b. El nombre del sistema operativo (servidor),
        <br /> c. El idioma del navegador (cliente).
    </p>

    <p><strong>Resultados:</strong></p>
    <div>
        <?php
        echo $_SERVER['SERVER_SIGNATURE'];
        echo "<br />";
        echo $_SERVER['SERVER_NAME'];
        echo "<br />";
        echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        ?>
    </div>
    <p>
        <a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>
    </p>

</body>

</html>