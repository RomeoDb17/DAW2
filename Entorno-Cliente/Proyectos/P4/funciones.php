<?php

// Function to establish a connection to the database
function conectarBaseDatos() {
    $servername = "127.0.0.1";
    $dbname = "tarea4";
    $username = "usu4";
    $password = "usu4";

    try {
        $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    } catch (PDOException $e) {
        die("Connection lost: " . $e->getMessage());
    }
}

// Function to close the database connection
function cerrarConexion($con) {
    $con = null;
}

// Function to retrieve user data
function obtenerUser($usuario) {
    $con = conectarBaseDatos();
    $stmt = $con->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    cerrarConexion($con);

    return $userData;
}

// Function to verify the password
function verificarContrasena($contrasenaIngresada, $contrasenaAlmacenada) {
    return password_verify($contrasenaIngresada, $contrasenaAlmacenada);
}

// Function to create a user session
function crearSesion($usuario) {
    session_start();
    $_SESSION["usuario"] = $usuario["usuario"];
    $_SESSION["horaInicio"] = date("Y-m-d H:i:s");
}

// Function to close the user session
function cerrarSesion() {
    session_start();
    session_unset();
    session_destroy();
}

// Function to retrieve user color preferences
function obtenerPreferenciasColor($usuario) {
    return isset($_COOKIE["preferenciascolor" . $usuario]) ? $_COOKIE["preferenciascolor" . $usuario] : "blanco";
}

// Function to save user color preferences in a cookie
function guardarPreferenciasColor($color, $usuario) {
    setcookie("preferenciascolor" . $usuario, $color, time() + (365 * 24 * 60 * 60), "/");
}

// Function to delete user color preferences
function eliminarPreferenciasColor($usuario) {
    unset($_SESSION["preferencias_color"]);

    setcookie("preferenciascolor" . $usuario, "", time() - 3600, "/");
}
