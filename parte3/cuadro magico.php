<?php
$n = 4;
$cuadrado = array_fill(0, $n, array_fill(0, $n, 0));

$x = $n / 2;
$y = 0;
$numero = 1;

while ($numero <= $n * $n) {
  $cuadrado[$y][$x] = $numero;
  $numero++;
  
  $nuevo_x = ($x + 1) % $n;
  $nuevo_y = ($y - 1 + $n) % $n;
  
  if ($cuadrado[$nuevo_y][$nuevo_x] != 0) {
    $nuevo_x = ($x - 1 + $n) % $n;
    $nuevo_y = $y;
  }
  
  $x = $nuevo_x;
  $y = $nuevo_y;
}

// Imprimir el cuadrado mágico
for ($i = 0; $i < $n; $i++) {
  for ($j = 0; $j < $n; $j++) {
    echo $cuadrado[$i][$j] . " ";
  }
  echo "\n";
}

// Verificar que todas las filas, columnas y diagonales sumen lo mismo
$suma = array_sum($cuadrado[0]);

for ($i = 0; $i < $n; $i++) {
  $fila = array_sum($cuadrado[$i]);
  $columna = array_sum(array_column($cuadrado, $i));
  $diagonal1 = $cuadrado[0][0] + $cuadrado[1][1] + $cuadrado[2][2] + $cuadrado[3][3];
  $diagonal2 = $cuadrado[0][3] + $cuadrado[1][2] + $cuadrado[2][1] + $cuadrado[3][0];
  
  if ($fila != $suma || $columna != $suma || $diagonal1 != $suma || $diagonal2 != $suma) {
    echo "El cuadrado no es mágico.\n";
    break;
  }
}

echo "El cuadrado es mágico.\n";
?>