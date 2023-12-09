<?php
// 3. Crea un array asociativo $estaturas.
$estaturas = array(
    "Juan" => 186,
    "Alberto" => 172,
    "Marta" => 173
);

// 4. Muestra la estatura de Alberto.
echo "La estatura de Alberto es: " . $estaturas["Alberto"] . " cm <br>";

// 5. Recorre el array asociativo $estaturas y muestra los pares clave/valor.
foreach ($estaturas as $nombre => $estatura) {
    echo "$nombre tiene una estatura de $estatura cm <br>";
}

// 6. Ordena el array asociativo $estaturas en orden descendente de acuerdo al valor.
arsort($estaturas);
print_r($estaturas);
echo "<br>";

// 7. Ordena el array asociativo $estaturas en orden descendente de acuerdo a la clave.
krsort($estaturas);
print_r($estaturas);
echo "<br>";
?>