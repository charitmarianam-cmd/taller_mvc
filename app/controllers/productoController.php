<?php

require_once __DIR__ . "/../models/productoModels.php";

class ProductoController
{
    public function index()
    {
        try {
            $producto = new Producto();
            $productos = $producto->getAll();

            require_once __DIR__ . "/../views/productos/index.php";
        } catch (Exception $e) {
            echo "Error en el controlador de productos: " . $e->getMessage();
        }
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/productos/crear.php";
    }

    public function guardar()
    {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];

        $producto = new producto();
        $resultado = $producto->guardar($nombre, $precio);

        if ($resultado) {
            echo "Proveedor guardado correctamente.";
            $this->index();
        } else {
            echo "Error al guardar el proveedor.";
        }
    }
}
