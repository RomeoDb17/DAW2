<?php
require_once 'funciones.php';

session_start();

$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "";

eliminarPreferenciasColor($usuario);

header("Location: preferencias.php");
exit();
?>