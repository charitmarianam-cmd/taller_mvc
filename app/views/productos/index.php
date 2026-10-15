<h1>Lista de Productos</h1>

    <table border=1>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio Del Producto</th>
            </tr>
        </thead>
        <body>
            <?php foreach ($productos as $p): ?>
                <tr>
                    <td><?= $p['nombre'] ?></td>
                    <td><?= $p['precio'] ?></td>
                </tr>
            <?php endforeach; ?>
        </body>
    </table>
</body>
</html>