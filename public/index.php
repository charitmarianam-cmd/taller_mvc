<?php

require_once __DIR__ . "/../app/controllers/ProductoController.php"; 

$method = $_SERVER['REQUEST_METHOD']; 
$uri = $_SERVER['REQUEST_URI']; 

?>

<a href="/taller_mvc/public/producto">producto</a> | 
<a href="/taller_mvc/public/producto/crear">crearProducto</a> 

<hr>

<?php 
if ($method === 'GET' && ($uri === "/taller_mvc/public/producto" || $uri === "/producto")) { 
    $productoController = new ProductoController(); 
    $productoController->index(); 
    exit;
}  

if ($method === 'GET' && ($uri === "/taller_mvc/public/producto/crear" || $uri === "/producto/crear")) { 
    $productoController = new ProductoController(); 
    $productoController->crear(); 
    exit;
} 

if ($method === "POST" && ($uri === "/taller_mvc/public/producto" || $uri === "/producto")) {
    $productoController = new ProductoController();
    $productoController->guardar();
    exit;
}

?>