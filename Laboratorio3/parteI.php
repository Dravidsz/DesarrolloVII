<?php

$numeros = array();

for ($i = 0; $i <3 ;$i++){
    $numeros[] = rand(1,100);
}

echo"Numeros Almacenados<br>";
foreach($numeros as $numero){
    echo $numero."<br>";
}

echo "Numero mayor <br>";
$numero_Mayor = max($numeros);
echo $numero_Mayor;

// Contar las veces que aparece cada número
$conteo = array_count_values($numeros);

// Filtrar solo los que se repiten (más de una vez)
$repetidos = array_filter($conteo, function($cantidad) {
    return $cantidad > 1;
});

// Mostrar la cantidad de números que se repiten
echo "<br>Cantidad de números repetidos: " . count($repetidos) . "<br>";

// Mostrar cuáles son y cuántas veces se repiten
if (!empty($repetidos)) {
    echo "Números repetidos:<br>";
    foreach($repetidos as $num => $cantidad){
        echo "Número $num repetido $cantidad veces<br>";
    }
} else {
    echo "No hay números repetidos.<br>";
}

?>