<?php
// Conexión a la base de datos (reemplaza estos valores con los de tu propia BD)
$servername = "localhost";
$username = "root";
$password = "Edg401193";
$dbname = "marketzone";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$detalles = $_POST['detalles'];
$precio = $_POST['precio'];
$eliminado = $_POST['eliminado'];

// Validar datos
if (empty($nombre) || empty($marca) || empty($modelo)|| empty($detalles) || empty($precio) || empty($eliminado)  || !is_numeric($precio)) {
    echo "Error: Todos los campos son obligatorios y el precio debe ser un número válido con punto decimal.";
} else {
    // Insertar datos en la base de datos
    $sql = "INSERT INTO productos (nombre, marca, modelo, detalles, precio, eliminado) VALUES ('$nombre', '$marca', '$modelo','$detalles',$precio, $eliminado)";

    if ($conn->query($sql) === TRUE) {
        // Mostrar resumen de los datos insertados
        echo "Producto registrado exitosamente:<br>";
        echo "Nombre: $nombre<br>";
        echo "Marca: $marca<br>";
        echo "Modelo: $modelo<br>";
        echo "Detalles: $detalles<br>";
        echo "Precio: $precio<br>";
        echo "eliminado: $eliminado<br>";
     
    } else {
        echo "Error al insertar el producto: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
