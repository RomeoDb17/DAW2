<?php
// 12. Función para resolver ecuaciones de segundo grado.
function resolverEcuacionSegundoGrado($a, $b, $c) {
    $discriminante = ($b * $b) - (4 * $a * $c);
    if ($discriminante < 0) {
        return false; // No hay soluciones reales
    } else {
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        return array($x1, $x2);
    }
}

// Ejemplo de uso de la función para una ecuación x^2 - 5x + 6 = 0.
$resultado = resolverEcuacionSegundoGrado(1, -5, 6);
if ($resultado === false) {
    echo "La ecuación no tiene soluciones reales.";
} else {
    echo "Las soluciones son: x1 = " . $resultado[0] . ", x2 = " . $resultado[1];
}
?>