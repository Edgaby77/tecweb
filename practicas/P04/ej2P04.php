<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function generarNumeroImpar() {
    return rand(1, 100) * 2 - 1;
}

function generarNumeroPar() {
    return rand(1, 100) * 2;
}

$matriz = array();
$secuenciaObjetivo = [1, 0, 1]; 
$iteraciones = 0;
$numerosGenerados = 0;


while ($iteraciones < 4) { 
    $fila = array();
    
    for ($i = 0; $i < 3; $i++) {
       
        if ($secuenciaObjetivo[$i] == 1) {
            $numero = generarNumeroImpar();
        } else {
            $numero = generarNumeroPar();
        }
        
        $fila[] = $numero;
        $numerosGenerados++;
    }
    
    $matriz[] = $fila;
    

    $ultimaFila = end($matriz);
    if ($ultimaFila == $secuenciaObjetivo) {
        break;
    }
    
    $iteraciones++;
}

echo "Matriz generada:\n";
foreach ($matriz as $fila) {
    echo implode(", ", $fila) . "\n";
}

echo "Número de iteraciones: " . $iteraciones . "\n";
echo "Cantidad de números generados: " . $numerosGenerados . "\n";
?>

</body>
</html>