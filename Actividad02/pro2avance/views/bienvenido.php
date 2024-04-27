<?php
// Iniciar la sesión
session_start();

// Verificar el estado de la sesión
/* if (!isset($_SESSION["username"])) {
    header("Location: indexlogin.php");
    exit();
} */

$username = $_SESSION["username"];
?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Crud </title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">


        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/plugins.config.js"></script>

        <link type="text/css" rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="js/toastr/toastr.min.css"/>
        <link type="text/css" rel="stylesheet" href="css/application.css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>   
    <?php include 'header.php'; ?> <!-- Incluir el menú -->

<div class="container mt-5">
    <h1>Página de Inicio</h1>
    <p>Bienvenido a nuestra página de inicio.</p>
</div>

<!-- Enlaces a los archivos JavaScript de Bootstrap (jQuery y Popper.js) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    </body>
</html>