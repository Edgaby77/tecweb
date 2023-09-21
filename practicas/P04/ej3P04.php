<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="http://localhost/tecweb/practicas/P04/ej1P04.php" method="get">
<?php

$numeroDado = isset($_GET['numero']) ? intval($_GET['numero']) : 0;

if ($numeroDado <= 0) {
    echo "Por favor, proporciona un número válido vía GET.";
} else {
    $encontrado = false;
    
    while (!$encontrado) {
        $numeroAleatorio = rand(1, 100); 
        
        if ($numeroAleatorio % $numeroDado == 0) {
            $encontrado = true;
            echo "El primer número múltiplo de $numeroDado obtenido aleatoriamente es: $numeroAleatorio";
        }
    }
}
?>
 </form>

</body>
</html>