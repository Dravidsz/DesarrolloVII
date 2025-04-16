<?php
// Definición de la clase Persona
class Persona {
    public $nombre;
    public $edad;
    public $genero;

    // Constructor para inicializar las propiedades
    public function __construct($nombre, $edad, $genero) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->genero = $genero;
    }

    // Método para verificar si la persona es mayor o menor de edad
    public function esMayorDeEdad() {
        return $this->edad >= 18;
    }

    // Método para mostrar la información completa
    public function mostrarInformacion() {
        $estado = $this->esMayorDeEdad() ? 'mayor' : 'menor';
        echo "Hola $this->nombre, eres un(a) $this->genero de $this->edad años, eres $estado de edad.<br>";
    }
}

echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio: Proyección de Salarios y Persona</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f4f9;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            padding: 20px;
            background-color: #2c3e50;
            color: white;
        }
        .section {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>';


// Proyección de salarios
echo '<h1>Proyección de Salarios para los Próximos 10 Años</h1>';
echo '<div class="section">';

$empleados = [
    "Empleado 1" => rand(800, 1500),
    "Empleado 2" => rand(800, 1500),
    "Empleado 3" => rand(800, 1500),
    "Empleado 4" => rand(800, 1500),
];

$years = range(2025, 2034);

echo '<table>
        <tr>
            <th>Año</th>';

foreach ($empleados as $nombre => $salario) {
    echo "<th>$nombre</th>";
}
echo '</tr>';

foreach ($years as $index => $year) {
    echo "<tr><td>$year</td>";
    foreach ($empleados as $nombre => $salario) {
        if ($index % 2 == 0 && $index != 0) {
            $empleados[$nombre] *= 1.10;
        }
        echo "<td>$" . number_format($empleados[$nombre], 2) . "</td>";
    }
    echo "</tr>";
}

echo '</table>';

// Crear instancia de la clase Persona y mostrar información
echo '<div class="section">';
$persona1 = new Persona("Juan", 25, "masculino");
$persona1->mostrarInformacion();

$persona2 = new Persona("Ana", 16, "femenino");
$persona2->mostrarInformacion();
echo '</div>';

// Sección de desarrolladores
echo '
<div class="section">
    <h3 style="text-align:center;">Desarrollado por:</h3>
    <ul style="list-style:none; padding: 0; text-align:center;">
        <li>Julio Gudiño 3-720-2066</li>
        <li>Amir Reyes 8-844-2213</li>
        <li>Rolando Alexander 8-948-2010</li>
        <li>Héctor Ortega 8-944-1541</li>
        <li>Daniel Guerra 9-734-1563</li>
    </ul>
</div>';

echo '</body></html>';
?>