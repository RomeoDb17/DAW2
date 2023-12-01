<?php
require_once 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Verify the user using verifyUser
    if (verifyUser($usuario, $contrasena)) {
        // Correct password, start the session
        // and redirect to the application page
        session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["horaInicio"] = date("Y-m-d H:i:s");
        header("Location: aplicacion.php");
        exit(); // Important: ensure to exit after the redirect
    } else {
        // Incorrect username or password
        echo "Usuario o contraseña incorrectos";
    }
}
?>
