<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    
    <?php
    
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];

    if ($sexo === 'femenino' && $edad >= 18 && $edad <= 35) {
        echo "<p>Bienvenida, usted está en el rango de edad permitido.</p>";
    } else {
        echo "<p>Error: No cumple con los requisitos de edad y/o sexo.</p>";
    }
    ?>
    
    <p><a href="formularioej5P04.html">Volver al formulario</a></p>
</body>
</html>
