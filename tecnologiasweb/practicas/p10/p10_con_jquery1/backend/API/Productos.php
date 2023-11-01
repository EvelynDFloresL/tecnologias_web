<?php
namespace database;
require_once 'DataBase.php';

class Productos extends DataBase {
    public function __construct($database = "marketzone") {
        parent::__construct($database); // Llama al constructor de la superclase para establecer la conexión a la BD.
        $this->response = array(); // Inicializa el atributo response como un array vacío.
    }

    // Método para agregar un producto a la base de datos
    /*public function agregarProducto($jsonOBJ) {
        $nombreProducto = $jsonOBJ->nombre;
        $sqlVerificarNombre = "SELECT COUNT(*) as count FROM productos WHERE nombre = '$nombreProducto' AND eliminado = 0";
        $resultVerificarNombre = $this->conexion->query($sqlVerificarNombre);

        if ($resultVerificarNombre && $row = $resultVerificarNombre->fetch_assoc()) {
            $count = $row['count'];

            if ($count == 0) {
                // El nombre no existe en la base de datos, se puede insertar el producto
                $this->conexion->set_charset("utf8");
                $sql = "INSERT INTO productos VALUES (null, '{$jsonOBJ->nombre}', '{$jsonOBJ->marca}', '{$jsonOBJ->modelo}', {$jsonOBJ->precio}, '{$jsonOBJ->detalles}', {$jsonOBJ->unidades}, '{$jsonOBJ->imagen}', 0)";
                
                if ($this->conexion->query($sql)) {
                    $this->response['status'] =  "success";
                    $this->response['message'] =  'SIN coincidencias en la BD, Producto Agregado';
                } else {
                    $this->response['message'] = "ERROR: No se ejecutó $sql. " . mysqli_error($this->conexion);
                }
            } else {
                $this->response['status'] = "error";
                $this->response['message'] = "Hay coincidencias en la BD, el producto ya existe.";
            }
        }

        $resultVerificarNombre->free();
    }*/
    // Método para buscar productos en la base de datos
    public function buscarProductos($search) {
        $data = array();

        // Realiza la consulta de búsqueda y al mismo tiempo valida si hubo resultados
        $sql = "SELECT * FROM productos WHERE (id = '{$search}' OR nombre LIKE '%{$search}%' OR marca LIKE '%{$search}%' OR detalles LIKE '%{$search}%') AND eliminado = 0";

        if ($result = $this->conexion->query($sql)) {
            // Obtiene los resultados
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            if (!is_null($rows)) {
                // Codifica los datos a UTF-8 y los mapea al arreglo de respuesta
                foreach ($rows as $num => $row) {
                    foreach ($row as $key => $value) {
                        $data[$num][$key] = ($value);
                    }
                }
            }
            $result->free();
        } else {
            throw new \Exception('Query Error: ' . mysqli_error($this->conexion));
        }
        return $data;
    }

    // Método para obtener la lista de productos desde la base de datos
    public function obtenerListaProductos() {
        $data = array();

        // Realiza la consulta de búsqueda y al mismo tiempo valida si hubo resultados
        if ($result = $this->conexion->query("SELECT * FROM productos WHERE eliminado = 0")) {
            // Obtiene los resultados
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            if (!is_null($rows)) {
                // Codifica los datos a UTF-8 y los mapea al arreglo de respuesta
                foreach ($rows as $num => $row) {
                    foreach ($row as $key => $value) {
                        $data[$num][$key] = ($value);
                    }
                }
            }
            $result->free();
        } else {
            throw new \Exception('Query Error: ' . mysqli_error($this->conexion));
        }
        return $data;
    }
}


?>