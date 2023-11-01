<?php
// Importa la clase Products del namespace database
use database\Productos;

require_once __DIR__.'/API/Productos.php';

// Crea una instancia de la clase Productos
$productos = new Productos('marketzone');

// Verifica si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Convierte los datos POST en un objeto JSON
    $productoData = json_decode(json_encode($_POST));
    
    // Llama al método para agregar un producto
    $productos->agregarProducto($productoData);
    
    // Obtiene la respuesta en formato JSON
    $response = $productos->getResponse();
    
    // Devuelve la respuesta al cliente
    echo $response;
} else {
    // Manejo de error: No se recibió una solicitud POST
    $response = array('status' => 'error', 'message' => 'No se recibió una solicitud POST');
    echo json_encode($response, JSON_PRETTY_PRINT);
}

?>
