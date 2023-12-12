<?php
require_once 'funciones.php';

// Inicializar variables
$mensajeError = '';

// Procesar formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Obtener datos del usuario desde la base de datos
    $usuarioData = obtenerUser($usuario);

   
    // Verificar la contraseña
    if ($usuarioData && password_verify($contrasena, $usuarioData["pwd"])) {
        // Contraseña correcta, iniciar sesión
        crearSesion($usuarioData);
        header("Location: aplicacion.php");
        exit(); // Importante: asegurarse de salir después de redirigir
    } else {
        // Contraseña incorrecta
        $mensajeError = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <title>Inicio Sesión - P4</title>
</head>
<body>
    <h3>Iniciar Sesión</h3>

    <?php if (!empty($mensajeError)): ?>
        <p style="color: red;"><?php echo $mensajeError; ?></p>
    <?php endif; ?>

    <form method="post" action="abrirSesion.php">
        <p>Usuario</p>
        <input type="text" name="usuario" required>
        <br>
        <p>Contraseña</p>
        <input type="password" name="contrasena" required>
        <br>
        <input type="submit" value="Iniciar Sesión">
    </form>

    <p><a href="informacion.php">Iniciar sesión como invitado</a></p>
</body>
</html>
