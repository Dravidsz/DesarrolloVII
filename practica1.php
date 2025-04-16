<?php

echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: #e6f0fa;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1, h2, h3 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            text-align: center;
        }

        .section {
            max-width: 700px;
            margin: 30px auto;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        label {
            font-weight: 600;
        }

        input[type="text"] {
            padding: 10px;
            width: 250px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        li {
            padding: 6px 0;
            font-size: 16px;
        }

        hr {
            border: none;
            height: 1px;
            background-color: #ddd;
            margin: 40px auto;
            width: 80%;
        }

        .resultado {
            font-weight: bold;
            font-size: 18px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<h1>LABORATORIO 2</h1>';

// Conversión de Celsius a Fahrenheit
$celcius = 2;
$farenheit = ($celcius * 1.8) + 32;

echo '<div class="section">';
echo "<h2>Conversión de Celsius a Fahrenheit</h2>";
echo "<p>Temperatura en Celsius: $celcius °C</p>";
echo "<p>Temperatura en Fahrenheit: $farenheit °F</p>";
echo "<h3>Clasificación de la temperatura</h3>";

if ($farenheit < 50) {
    echo "<p>Frío</p>";
} elseif ($farenheit >= 50 && $farenheit <= 86) {
    echo "<p>Templado</p>";
} else {
    echo "<p>Caliente</p>";
}
echo '</div>';

// Contraseñas válidas
$contrasenas = ["abc123", "pass1", "hola", "admin", "12345", "password", "a1b2c3"];
$contrasenas_validas = array_filter($contrasenas, function($contrasena) {
    return strlen($contrasena) >= 6;
});

echo '<div class="section">';
echo "<h3>Contraseñas válidas</h3>";
if (count($contrasenas_validas) > 0) {
    echo "<ul>";
    foreach ($contrasenas_validas as $contrasena) {
        echo "<li>$contrasena</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No hay contraseñas válidas.</p>";
}
echo '</div>';
?>

<div class="section">
    <h1>Calculadora Simple</h1>
    <form action="" method="POST">
        <label for="num1">Primer número:</label>
        <input type="text" name="num1" id="num1" required>

        <label for="num2">Segundo número:</label>
        <input type="text" name="num2" id="num2" required>

        <label for="operador">Operador (+, -, *, /):</label>
        <input type="text" name="operador" id="operador" required>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operador = $_POST['operador'];

        function operar($num1, $num2, $operador) {
            switch ($operador) {
                case "+":
                    return $num1 + $num2;
                case "-":
                    return $num1 - $num2;
                case "*":
                    return $num1 * $num2;
                case "/":
                    if ($num2 == 0) {
                        return "Error: No se puede dividir por cero.";
                    }
                    return $num1 / $num2;
                default:
                    return "Error: Operador no válido. Usa +, -, *, /";
            }
        }

        if (!is_numeric($num1) || !is_numeric($num2) || intval($num1) != $num1 || intval($num2) != $num2) {
            echo "<p class='resultado'>Error: Debes ingresar números enteros.</p>";
        } else {
            $resultado = operar($num1, $num2, $operador);
            echo "<p class='resultado'>Resultado: $resultado</p>";
        }
    }
    ?>
</div>

<div class="section">
    <h3>Desarrollado por:</h3>
    <ul>
        <li>Julio Gudiño 3-720-2066</li>
        <li>Amir Reyes 8-844-2213</li>
        <li>Rolando Alexander 8-948-2010</li>
        <li>Héctor Ortega 8-944-1541</li>
        <li>Daniel Guerra 9-734-1563</li>
    </ul>
</div>

</body>
</html>