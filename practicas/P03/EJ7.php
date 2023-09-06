<?php
$apacheVersion = $_SERVER['SERVER_SOFTWARE']; 
$phpVersion = phpversion(); 
echo 'EJERCICIO 7';
echo '<br>';
echo "Versión de Apache: $apacheVersion\n";
echo '<br>';
echo "Versión de PHP: $phpVersion\n";
echo '<br>';


$serverOS = php_uname('s'); 

echo "Sistema Operativo del Servidor: $serverOS\n";
echo '<br>';


$clientLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE']; 

echo "Idioma del Navegador del Cliente: $clientLanguage\n";
echo '<br>';

?>