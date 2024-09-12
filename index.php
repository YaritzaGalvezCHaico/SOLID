<?php

include 'patas.php';


$animales = [2, 4, 5, 8]; // Una lista de animales con diferente cantidad de patas
$calculadora = new CalculatePatas($animales);

// Ejecutamos la suma
$calculadora->sum();

// Mostramos el resultado en formato texto
echo $calculadora->print();

echo "\n\n"; // Línea en blanco para separar la salida

// Mostramos el resultado en formato JSON
echo $calculadora->toJson();

?>