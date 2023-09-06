<?php
echo 'Ejercicio 4';
echo'<br>';
@$a = "PHP5";
$GLOBALS["a"] = $a;
$z[] = &$GLOBALS['a'];
$b = "5a version de PHP";
$GLOBALS['b'] = $b;
@$c = $GLOBALS['b'] * 10;
$GLOBALS['c'] = $c;
$GLOBALS['a'] .= $GLOBALS['b'];
@$GLOBALS['b'] *= $GLOBALS['c'];
$z[0] = "MySQL";
$GLOBALS['z'] = $z;


echo "\$a: " . $GLOBALS['a'] . "\n";
echo "\$b: " . $GLOBALS['b'] . "\n";
echo "\$c: " . $GLOBALS['c'] . "\n";
echo "\$z: [" . implode(", ", $GLOBALS['z']) . "]\n";

?>