<?php
require_once 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $usuarioData = obtenerUser($usuario);

    var_dump($contrasena); // Muestra la contraseña ingresada
    var_dump($usuarioData["pwd"]); // Muestra la contraseña almacenada en la base de datos

    if ($usuarioData && password_verify($contrasena, $usuarioData["pwd"])) {
        crearSesion($usuarioData);
        header("Location: aplicacion.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion - P4</title>
</head>
<body>
    <h3>Log In</h3>
    <form method="post" action="abrirSesion.php">
        <p>Username</p>
            <input type="text" name="usuario" required>
        <br>
        <p>Password</p>
            <input type="password" name="contrasena" required>
        <br>
            <input type="submit" value="Log In">
    </form>
    <p><a href="informacion.php">Log in as a guest</a></p>
</body>
</html>