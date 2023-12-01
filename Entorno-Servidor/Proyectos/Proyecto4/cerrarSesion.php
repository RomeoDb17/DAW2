<?php
require_once 'functions.php'; // Include the functions file

// Call the function to close the user session
cerrarSesion();

// Redirect to the index.php page
header("Location: index.php");

// Ensure that no further code is executed after the redirect
exit();
?>
