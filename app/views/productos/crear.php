<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
<body>

    <h1>Crear Producto</h1>

    <form action="/taller_mvc/public/producto" method="POST">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ej. Camiseta deportiva" required>

        <br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" placeholder="Ej. 45.99" required>

        <br><br>

        <button type="submit">Guardar</button>

    </form>

    <br>

    <a href="/taller_mvc/public/producto">Volver</a>

</body>
</html>