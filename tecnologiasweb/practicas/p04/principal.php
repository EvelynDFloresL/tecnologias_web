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

</body>

</html>