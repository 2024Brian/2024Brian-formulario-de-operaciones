<?php

function suma($num1, $num2) {
    return $num1 + $num2;
}

function resta($num1, $num2) {
    return $num1 - $num2;
}

function multiplicacion($num1, $num2) {
    return $num1 * $num2;
}

function division($num1, $num2) {
    if ($num2 == 0) {
        return "Error: División por cero no permitida.";
    }
    return $num1 / $num2;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    // Validación de entrada
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Error: Ambos valores deben ser números.";
        exit;
    }

    $num1 = (float)$num1;
    $num2 = (float)$num2;

    switch ($operacion) {
        case "suma":
            $resultado = suma($num1, $num2);
            break;
        case "resta":
            $resultado = resta($num1, $num2);
            break;
        case "multiplicacion":
            $resultado = multiplicacion($num1, $num2);
            break;
        case "division":
            $resultado = division($num1, $num2);
            break;
        default:
            $resultado = "Operación no válida.";
    }

    echo "Resultado: " . $resultado;
}
?>
