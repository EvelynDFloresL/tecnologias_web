<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<?php
$nombre = $_POST["nombre"];
$marca  = $_POST["marca"];
$modelo = $_POST["modelo"];
$precio = $_POST["precio"];
$detalles = $_POST["detalles"];
$unidades = $_POST["unidades"];
$imagen   = $_POST["imagen"];

/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', '151627', 'marketzone');

/** comprobar la conexión */
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}

$errores = [];

if (empty($nombre) || empty($marca) || empty($modelo) || empty($precio) || empty($detalles) || empty($unidades) || empty($imagen)) {
    $errores[] = 'Hay un campo vacio, complete los campos.';
}

if (!is_numeric($precio) || floatval($precio) <= 0) {
    $errores[] = 'El precio debe ser un numero decimal o entero.';
}

if (!ctype_digit($unidades) || intval($unidades) <= 0) {
    $errores[] = 'La cantidad de unidades debe ser entero.';
}

$extensiones = array('.jpg', '.jpeg', '.png', '.gif');
$imagen_extension = strtolower(strrchr($imagen, '.'));

if (!in_array($imagen_extension, $extensiones)) {
    $errores[] = 'En imagen se debe agregar una ruta correcta';
}

if (empty($errores)) {
    $sql = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}')";

    if ($link->query($sql)) {
        echo '<p>';
        echo '<strong>Informacion del producto</strong> <br><br> <strong>ID: </strong>' . $link->insert_id;
        echo '<br><strong>Nombre: </strong>' . $nombre;
        echo '<br><strong>Marca: </strong>' . $marca;
        echo '<br><strong>Modelo: </strong>' . $modelo;
        echo '<br><strong>Precio: </strong>' . $precio;
        echo '<br><strong>Detalles: </strong>' . $detalles;
        echo '<br><strong>Unidades: </strong>' . $unidades;
        echo '<br><strong>Imagen: </strong><br> <img src=https://localhost/tecnologias_web/tecnologiasweb/practicas/p06/' . $imagen . ' width="200px" height="200px" />';
        echo '</p>';
    } else {
        echo '<br><strong>Error al insertar el producto en la base de datos.</strong>';
    }
} else {
    echo '<br><strong>Advertencias:</strong><br>';
    foreach ($errores as $error) {
        echo $error . '<br>';
    }
}

$link->close();
?>

</html>