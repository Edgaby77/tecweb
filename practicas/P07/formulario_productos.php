<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Producto</title>
</head>
<body>
    <h1>Formulario de Producto</h1>
    <form id="productForm" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" required maxlength="100"><br><br>
        
        <label for="marca">Marca:</label>
        <select id="marca" required>
            <option value="">Selecciona una marca</option>
            <option value="Marca 1">Puma</option>
            <option value="Marca 2">Adidas</option>
            <!-- Agrega más opciones de marca según sea necesario -->
        </select><br><br>
        
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" required pattern="[a-zA-Z0-9]+" maxlength="25"><br><br>
        
        <label for="precio">Precio:</label>
        <input type="number" id="precio" required min="99.99" step="0.01"><br><br>
        
        <label for="detalles">Detalles:</label>
        <textarea id="detalles" maxlength="250"></textarea><br><br>
        
        <label for="unidades">Unidades:</label>
        <input type="number" id="unidades" required min="0"><br><br>
        
        <label for="imagen">Ruta de la Imagen (opcional):</label>
        <input type="text" id="imagen" placeholder="Ruta de imagen por defecto"><br><br>
        
        <button type="submit">Guardar Producto</button>
    </form>

    <script>
        document.getElementById("productForm").addEventListener("submit", function (event) {
            const nombre = document.getElementById("nombre").value;
            const marca = document.getElementById("marca").value;
            const modelo = document.getElementById("modelo").value;
            const precio = parseFloat(document.getElementById("precio").value);
            const detalles = document.getElementById("detalles").value;
            const unidades = parseInt(document.getElementById("unidades").value);
            const imagen = document.getElementById("imagen").value || "ruta_por_defecto.jpg";

            if (nombre.length === 0 || nombre.length > 100) {
                alert("El nombre es requerido y debe tener 100 caracteres o menos.");
                event.preventDefault();
                return;
            }

            if (marca === "") {
                alert("Debes seleccionar una marca.");
                event.preventDefault();
                return;
            }

            if (modelo.length === 0 || modelo.length > 25 || !modelo.match(/^[a-zA-Z0-9]+$/)) {
                alert("El modelo es requerido, debe tener 25 caracteres o menos y contener solo caracteres alfanuméricos.");
                event.preventDefault();
                return;
            }

            if (precio <= 99.99) {
                alert("El precio debe ser mayor a 99.99.");
                event.preventDefault();
                return;
            }

            if (detalles.length > 250) {
                alert("Los detalles deben tener 250 caracteres o menos.");
                event.preventDefault();
                return;
            }

            if (unidades < 0) {
                alert("Las unidades deben ser mayores o iguales a 0.");
                event.preventDefault();
                return;
            }

            // Si todas las validaciones pasan, puedes enviar los datos al servidor Node.js para guardarlos en la base de datos.
        });
    </script>
</body>
</html>
