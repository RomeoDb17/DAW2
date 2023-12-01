<?php
require_once 'funciones.php'; // Include the functions file

// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Retrieve user data based on the provided username
    $usuarioData = obtenerUser($usuario);

    // Check if user data exists and the entered password is correct
    if ($usuarioData && verificarContrasena($contrasena, $usuarioData["pwd"])) {
        // Create a session for the authenticated user
        crearSesion($usuarioData);
        
        // Redirect to the application page after successful login
        header("Location: aplicacion.php");
    } else {
        // Display an error message for incorrect username or password
        echo "Usuario o contraseña incorrectos";
    }
}
?>
