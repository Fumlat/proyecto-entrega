<?php
$mi_array = array(1, 2, 3, 4, 5);

// Acceso a un elemento específico del array
echo $mi_array[0];  // Output: 1

// Modificación de un elemento del array
$mi_array[1] = 10;
echo $mi_array[1];  // Output: 10

// Agregar elementos al final del array
array_push($mi_array, 6, 7);
print_r($mi_array);  // Output: [1, 10, 3, 4, 5, 6, 7]

// Eliminar el último elemento del array
array_pop($mi_array);
print_r($mi_array);  // Output: [1, 10, 3, 4, 5, 6]

// Obtener la longitud del array
echo count($mi_array);  // Output: 6

// Recorrer un array con un ciclo for
for ($i = 0; $i < count($mi_array); $i++) {
  echo $mi_array[$i] . " ";
}
// Output: 1 10 3 4 5 6
?>