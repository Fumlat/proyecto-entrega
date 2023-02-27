<?php

$a = array(2, 10, 1991);
$b = array(25, 12, 1990);
$c = array('Donald', true, $b);
list($x, $y) = array(array(27, 3), 9);
list($z, $w) = $x;
$v = array($x, $a);

// Evaluar las expresiones
echo $a[1] . "\n";  // Resultado: 10 Tipo: integer

echo $b[0] + $a[2] . "\n";  // Resultado: 2015 Tipo: integer

echo count($c) . "\n";  // Resultado: 3 Tipo: integer

echo $c[2][2] . "\n";  // Resultado: 1990 Tipo: integer

// No se puede acceder al elemento 3 de la tupla c[0], por lo que se producirá un error
//echo $c[0][3] . "\n";

// No se puede asignar un valor a un elemento de una tupla, por lo que se producirá un error
// $c[2][0] = 'Mickey';

echo $x[0][1] . "\n";  // Resultado: 3 Tipo: integer

echo $y . "\n";  // Resultado: 9 Tipo: integer

echo $z . "\n";  // Resultado: 27 Tipo: integer

echo $v[1][0] . "\n";  // Resultado: 2, Tipo: integer

?>
