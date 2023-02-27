<?php
// Pedir la población y la tasa de crecimiento anual de cada país
echo "Ingrese la población inicial del país A: ";
$poblacionA = intval(readline());
echo "Ingrese la tasa de crecimiento anual del país A (en porcentaje): ";
$tasaA = floatval(readline());
echo "Ingrese la población inicial del país B: ";
$poblacionB = intval(readline());
echo "Ingrese la tasa de crecimiento anual del país B (en porcentaje): ";
$tasaB = floatval(readline());

// Pedir la cantidad de migrantes del país A al país B
echo "Ingrese la cantidad de migrantes del país A al país B: ";
$migrantes = intval(readline());

// Calcular la población resultante después de un año
$nuevaPoblacionA = intval($poblacionA * (1 + $tasaA / 100) - $migrantes);
$nuevaPoblacionB = intval($poblacionB * (1 + $tasaB / 100) + $migrantes);

// Mostrar la población resultante de cada país después de un año
echo "La población del país A después de un año es: " . $nuevaPoblacionA . "\n";
echo "La población del país B después de un año es: " . $nuevaPoblacionB . "\n";
?>