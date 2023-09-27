<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
    <?php
$_myvar;
$_7var;
//myvar;//invalida
$myvar;
$var7;
$_element1;
//$house*5; //invalida
     echo'<ul>';
     echo'<li>$_myvar es valida por que inicia con guion bajo</li>';
     echo'<li>$_7var es valida por que inicia con guion bajo</li>';
     echo'<li>$myvar es valida por que inicia con una letra</li>';
     echo'<li>$var7 es valida por que inicia con una letra</li>';
     echo'<li>$_element1 es valida por que inicia con guion bajo</li>';
     echo'<li>$house*5 no es valida por que lleva un *</li>';
     echo'<li>myvar no es valida por que no lleva $</li>';
     echo'</ul>';
     include 'ejercicio2.php'
     
    ?>

<?php
  $a = "PHP5";
  echo "\$a: " . $a . " (Tipo: " . gettype($a) . ")\n";
  echo '<br>';
  $z[] = &$a;
  echo "\$z: [" . implode(", ", $z) . "] (Tipo de \$z[0]: " . gettype($z[0]) . ")\n";
  echo '<br>';
  $b = "5a version de PHP";
  echo "\$b: " . $b . " (Tipo: " . gettype($b) . ")\n";
  echo '<br>';
  $c = $b * 10;
  echo "\$c:";
  echo'<br>';
   include 'ej4.php';
   echo'<br>';
   include 'ejer5.php';
   echo '<br>';
   include 'EJ7.php';
   echo '<br>';
   include '6.php'
     ?>

    
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="XHTML 1.0 estricto válido" height="31" width="88" /></a>
  </p>

</body>
</html>