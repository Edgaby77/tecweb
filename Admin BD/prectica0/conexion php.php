<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarea2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar si se ha establecido la conexión
if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

// Procesar los datos del formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $IdVoluntario = $_POST["IdVoluntario"];
    $Nombre = $_POST["Nombre"];
    $Apellido1 = $_POST["Apellido1"];
    $Apellido2 = $_POST["Apellido2"];
    $Disponibilidad =$_POST["Disponibilidad"];
    $Profesion = $_POST["Profesion"];
    $fechanacimiento = $_POST["fechanacimiento"];

    // Preparar la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO voluntario (IdVoluntario, Nombre, Apellido1, Apellido2, disponibilidad, profesion, fechanacimiento) VALUES ('$IdVoluntario', '$Nombre', '$Apellido1', '$Apellido2','$Apellido2','$Disponibilidad','$Profesion','$fechanacimiento')";

    // Ejecutar la consulta SQL y comprobar si se ha insertado el registro correctamente
        if (mysqli_query($conn, $sql)) {
        echo "Registro creado correctamente";
    } else {
        echo "Error al crear el registro: " . mysqli_error($conn);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
