<?php
$celcius = 2;
$farenheit = ($celcius * 1.8) + 32;
echo($farenheit);
echo '<br>';

if ($farenheit < 50){
    echo 'Frio';
} if($farenheit >= 50 && $farenheit <= 86) {
    echo 'Templado';
}
if($farenheit > 86) {
    echo 'Caliente';
}


$contrasena = ["abc123", "pass1", "hola", "admin"];

function filtrarPorTamano($array, $tamano) {
    return array_filter($array, function($elemento) use ($tamano) {
        return strlen($elemento) < $tamano; 
    });
}

$resultado = filtrarPorTamano($contrasena, 6);


print_r($resultado);



?>