<?php
// Preguntar al usuario el número de términos a utilizar
$n = (int) readline("Introduce el número de términos a utilizar: ");

// Inicializar la variable para almacenar la suma
$suma = 0;

// Calcular la suma
for ($i = 0; $i < $n; $i++) {
    $suma += (pow(-1, $i) / (2 * $i + 1));
}

// Multiplicar por 4 para obtener el valor de π
$pi = 4 * $suma;

// Mostrar el valor estimado de π
echo "El valor estimado de π con $n términos es: $pi\n";
?>