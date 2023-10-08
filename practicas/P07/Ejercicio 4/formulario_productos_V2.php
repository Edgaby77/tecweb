<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Productos</title>
</head>
<body>
    <h1>Registro de Productos</h1>
    <form action="set_producto_v2.php" method="post">
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="marca">Marca:</label>
        <textarea name="marca" rows="4" required></textarea><br><br>

        <label for="modelo">Modelo:</label>
        <textarea name="modelo" rows="4" required></textarea><br><br>

        <label for="detalles">Detalles:</label>
        <textarea name="detalles" rows="4" required></textarea><br><br>

        <label for="stock">Precio</label>
        <input type="number" name="precio" required><br><br>

        <label for="stock">eliminado</label>
        <input type="number" name="eliminado" required><br><br>

        <input type="submit" value="Registrar Producto">
    </form>
</body>
</html>
