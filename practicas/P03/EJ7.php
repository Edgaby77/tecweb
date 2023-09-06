<?php
$apacheVersion = $_SERVER['SERVER_SOFTWARE']; // Versión de Apache
$phpVersion = phpversion(); // Versión de PHP
echo 'EJERCICIO 7';
echo '<br>';
echo "Versión de Apache: $apacheVersion\n";
echo '<br>';
echo "Versión de PHP: $phpVersion\n";
echo '<br>';


$serverOS = php_uname('s'); // Nombre del sistema operativo del servidor

echo "Sistema Operativo del Servidor: $serverOS\n";
echo '<br>';


$clientLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE']; // Idioma del navegador del cliente

echo "Idioma del Navegador del Cliente: $clientLanguage\n";
echo '<br>';

?>