<?php
require_once 'funciones.php'; // Include the functions file

session_start();// Start the session

// Check if the user is not logged in, redirect to the index.php page
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}

// Process the form data if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $_POST["color"];

    // Save user color preferences using the user's session username
    guardarPreferenciasColor($color, $_SESSION["usuario"]);
}

// Retrieve user's color preferences
$colorSeleccionado = obtenerPreferenciasColor($_SESSION["usuario"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <style>
        body {
            background-color: <?php echo $colorSeleccionado; ?>;
        }
    </style>
</head>
<body>
    <!-- Display user information -->
    <p>Connected as: <?php echo $_SESSION["usuario"]; ?></p>
    <p>(Log In: <?php echo $_SESSION["horaInicio"]; ?>)</p>

    <h2>Application</h2>
    <h3>App Menu</h3>
    <p><a href="preferencias.php">Preferences</a></p>
    <p><a href="informacion.php">View the updated information</a></p>
    <p><a href="cerrarSesion.php">Log Out</a></p>
    </body>
</html>