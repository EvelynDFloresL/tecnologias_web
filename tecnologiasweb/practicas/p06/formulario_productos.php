<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Productos</title>
</head>

<body>
    <div id="form">
        <form method="POST" action="https://localhost/tecnologias_web/tecnologiasweb/practicas/p06/set_producto_v2.php">
            <h1><strong>Registro de Productos</strong></h1>
            <h3>Llena cada campo con la informacion correcta.</h3>
            <p><br></p>
            <ul>
                <li>Nombre: <input id="nombre" name="nombre" type="text" /></li>
                <br>
                <li>Marca: <input id="marca" name="marca" type="text" /></li>
                <br>
                <li>Modelo: <input id="modelo" name="modelo" type="text" /></li>
                <br>
                <li>Precio: <input id="precio" name="precio" type="text" placeholder="$000.00" /></li>
                <br>
                <li>Detalles: <br>
                    <textarea name="detalles" rows="3" cols="50" id="detalles" placeholder="No más de 300 caracteres de longitud"></textarea>
                    <br><br>
                <li>Unidades: <input id="unidades" name="unidades" type="text" /></li>
                <br>
                <li>Imagen: <input id="imagen" name="imagen" type="text" placeholder="img/ejemplo.png" /></li>
                <br>
            </ul>
            <p><input id="boton" type="submit" value="INSERTAR" /></p>
        </form>
    </div>
</body>

</html>