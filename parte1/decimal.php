<?php
// Preguntar al usuario por el número real
$num = readline("Ingresa un número real: ");

// Obtener la parte decimal del número
$parte_decimal = $num - floor($num);

// Mostrar la parte decimal
echo "La parte decimal de $num es: $parte_decimal\n";
?>