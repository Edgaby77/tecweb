<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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