<?php
// Preguntar al usuario la hora actual y las horas a avanzar
$t = (int) readline("Introduce la hora actual (0-23): ");
$h = (int) readline("Introduce las horas a avanzar: ");

// Calcular la hora futura
$hora_futura = ($t + $h) % 24;

// Mostrar la hora futura
echo "Dentro de $h horas, el reloj marcará las $hora_futura horas.\n";
?>
