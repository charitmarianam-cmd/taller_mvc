<h1>Crear Producto</h1>

<form action="/taller_mvc/public/producto" method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <br><br>

    <label>Precio:</label>
    <input type="number" name="precio" step="0.01" required>

    <br><br>

    <button type="submit">Guardar</button>

</form>

<br>

<a href="/taller_mvc/public/producto">Volver</a>

</body>

</html>