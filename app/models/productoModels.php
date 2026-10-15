<?php

require_once __DIR__ . "/../../config/database.php";

class Producto
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM productos";
            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll();
        } catch (PDOException $e) {
            error_log("Error en getAll de Producto: " . $e->getMessage());
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM productos WHERE id = :id";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id", $id, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch();
        } catch (PDOException $e) {
            error_log("Error en getById de Producto: " . $e->getMessage());
            return false;
        }
    }

    public function guardar($nombre, $precio)
    {
        try {
            $sql = "INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)";
            $consulta = $this->connection->prepare($sql);

            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":precio", $precio);

            return $consulta->execute();
        } catch (PDOException $e) {
            error_log("Error al guardar el producto: " . $e->getMessage());
            return false;
        }
    }
}