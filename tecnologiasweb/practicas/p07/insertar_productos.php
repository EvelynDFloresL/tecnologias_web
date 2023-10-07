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
$eliminado = 0;

/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', '151627', 'tienda');

/** comprobar la conexión */
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}


    $sql = "INSERT INTO libros VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}', {$eliminado})";

    if ($link->query($sql)) {
        echo '<p>';
        echo '<strong>Informacion del producto</strong> <br><br> <strong>ID: </strong>' . $link->insert_id;
        echo '<br><strong>Nombre: </strong>' . $nombre;
        echo '<br><strong>Marca: </strong>' . $marca;
        echo '<br><strong>Modelo: </strong>' . $modelo;
        echo '<br><strong>Precio: </strong>' . $precio;
        echo '<br><strong>Detalles: </strong>' . $detalles;
        echo '<br><strong>Unidades: </strong>' . $unidades;
        echo '<br><strong>Imagen: </strong><br> <img src=https://localhost/tecnologias_web/tecnologiasweb/practicas/p07/' . $imagen . ' width="200px" height="200px" />';
        echo '</p>';
    } else {
        echo '<br><strong>Error al insertar el producto en la base de datos.</strong>';
    }

$link->close();
?>

</html>