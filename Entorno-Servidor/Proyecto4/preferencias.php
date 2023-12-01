<?php
require_once 'funciones.php'; // Include the functions file
session_start(); // Start the session

// Retrieve user's color preferences
$colorSeleccionado = obtenerPreferenciasColor($_SESSION["usuario"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferences</title>
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

    <h2>Prefereces</h2>
    <!-- Form to update user preferences -->
    <form method="post" action="procePreferencias.php">
        Selecciona un color de fondo:
        <label>
            <input type="color" name="color" value="<?php echo $colorSeleccionado; ?>">
        </label>
        <br>
        <input type="submit" value="Guardar Preferencias">
    </form>

    <!-- Form to reset user preferences -->
    <form method="post" action="borrarPreferencias.php">
        <input type="submit" value="Restablecer Preferencias">
    </form>

    <!-- Links to different sections of the application -->
    <p><a href="informacion.php">Ver Información con las Preferencias Actualizadas</a></p>
    <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>
</body>
</html>