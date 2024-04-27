<?php
session_start();

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario de vuelta al formulario de inicio de sesión
header("Location: ../indexlogin.php");
exit();
?>
