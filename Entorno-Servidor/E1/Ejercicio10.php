<?php
// 10. Obtén datos de la variable $cadena.
$cadena = "Esto es un string de varias palabras";
$numCaracteres = strlen($cadena);
$numPalabras = str_word_count($cadena);
$cadenaMayuscula = strtoupper($cadena);

echo "Número de caracteres en la cadena: $numCaracteres <br>";
echo "Número de palabras en la cadena: $numPalabras <br>";
echo "Cadena en mayúsculas: $cadenaMayuscula <br>";
?>