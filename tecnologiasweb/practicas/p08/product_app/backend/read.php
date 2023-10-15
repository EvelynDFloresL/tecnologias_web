<?php
    include_once __DIR__.'/database.php';

    // SE CREA EL ARREGLO QUE SE VA A DEVOLVER EN FORMA DE JSON
    $data = array();
    // SE VERIFICA HABER RECIBIDO EL ID
    if( isset($_POST['buscar']) ) {
        $buscar = $_POST['buscar'];

        // SE REALIZA LA QUERY DE BÚSQUEDA Y AL MISMO TIEMPO SE VALIDA SI HUBO RESULTADOS
        if ( $result = $conexion->query("SELECT * FROM productos WHERE nombre LIKE '%$buscar%' or marca LIKE '%$buscar%' or detalles LIKE '%$buscar%'") ) {
            // SE OBTIENEN LOS RESULTADOS
			$row = $result->fetch_all(MYSQLI_ASSOC);

            if(!is_null($row)) {
                // SE CODIFICAN A UTF-8 LOS DATOS Y SE MAPEAN AL ARREGLO DE RESPUESTA
                foreach ($row as $num => $registro) {            
                    foreach ($registro as $key => $value) {     
                        $data[$num][$key] = $value;
                    }
                }
            }
			$result->free();
		} else {
            die('Query Error: '.mysqli_error($conexion));
        }
		$conexion->close();
    }
    
    // SE HACE LA CONVERSIÓN DE ARRAY A JSON

    echo json_encode($data, JSON_PRETTY_PRINT);
?>