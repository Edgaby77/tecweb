<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <form action="http://localhost/tecweb/practicas/P04/ej1P04.php" method="get">  
    
    <?php
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            if ($num%5==0 && $num%7==0)
            {
                echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
            }
            else
            {
                echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
            }
        }
    ?>
 </form>

 <h3>Ejercicio 2</h3>

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

<h4>Ejercicio 3</h4>

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

 <h5>Ejercicio 4</h5>


 <?php

$arreglo = array();
for ($i = 97; $i <= 122; $i++) {
    $arreglo[$i] = chr($i); 
}


echo '<table border="1">';
echo '<tr><th>Índice</th><th>Valor</th></tr>';

foreach ($arreglo as $indice => $valor) {
    echo '<tr>';
    echo '<td>' . $indice . '</td>';
    echo '<td>' . $valor . '</td>';
    echo '</tr>';
}

echo '</table>';
?>





</body>
</html>