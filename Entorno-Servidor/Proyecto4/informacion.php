<?php
require_once 'funciones.php';

session_start();

if (isset($_GET['logout'])) {
    cerrarSesion();
    header("Location: index.php");
    exit();
}
$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "Invitado";

$colorFondo = obtenerPreferenciasColor($usuario);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Info</title>
</head>
<body>
    <h2>App Info</h2>
        <p>Welcome to the application. This simple application allows users to authenticate in order to access the application page.</p>
        <p>If you are a guest user, you can access this information page, but you won't have access to the complete application.</p>
    <p><a href="index.php">Home</a></p>
</body>
</html>