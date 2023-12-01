<?php
require_once 'funciones.php';

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $_POST["color"];
    guardarPreferenciasColor($color, $_SESSION["usuario"]);
    header("Location: aplicacion.php");
    exit();
}

header("Location: aplicacion.php");
exit();