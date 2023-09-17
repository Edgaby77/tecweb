<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Función para generar un número aleatorio impar
function generarNumeroImpar() {
    return rand(1, 100) * 2 - 1;
}

// Función para generar un número aleatorio par
function generarNumeroPar() {
    return rand(1, 100) * 2;
}

// Inicializamos la matriz vacía
$matriz = array();
$secuenciaObjetivo = [1, 0, 1]; // 1 representa impar, 0 representa par
$iteraciones = 0;
$numerosGenerados = 0;

// Bucle hasta que alcancemos la secuencia deseada
while ($iteraciones < 4) { // Establecemos un límite de 4 iteraciones
    $fila = array();
    
    for ($i = 0; $i < 3; $i++) {
        // Generamos un número aleatorio impar o par
        if ($secuenciaObjetivo[$i] == 1) {
            $numero = generarNumeroImpar();
        } else {
            $numero = generarNumeroPar();
        }
        
        $fila[] = $numero;
        $numerosGenerados++;
    }
    
    // Agregamos la fila a la matriz
    $matriz[] = $fila;
    
    // Verificamos si la matriz cumple con la secuencia deseada
    $ultimaFila = end($matriz);
    if ($ultimaFila == $secuenciaObjetivo) {
        break;
    }
    
    $iteraciones++;
}

// Mostramos la matriz
echo "Matriz generada:\n";
foreach ($matriz as $fila) {
    echo implode(", ", $fila) . "\n";
}

// Mostramos la cantidad de iteraciones y números generados
echo "Número de iteraciones: " . $iteraciones . "\n";
echo "Cantidad de números generados: " . $numerosGenerados . "\n";
?>

</body>
</html>