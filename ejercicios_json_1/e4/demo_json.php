<?php
  $jsonString = $_GET['x'];

  $decodedJSON = json_decode($jsonString, true);

  echo "Nombre recibido desde el JSON: " . $decodedJSON['nombre'];
?>
