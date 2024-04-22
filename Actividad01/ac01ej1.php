<?php
    function Nombre_Navegador($user_agent) {
        if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
        elseif (strpos($user_agent, 'Edge')) return 'Edge';
        elseif (strpos($user_agent, 'Chrome')) return 'Google Chrome';
        elseif (strpos($user_agent, 'Safari')) return 'Safari';
        elseif (strpos($user_agent, 'Firefox')) return 'Mozilla Firefox';
        elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';

    // Mostrar el nombre del navegador
        return "$user_agent";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO01
    </title>
</head>
<body>
    <center>
    <h1>Bienvenido</h1>
    <?php
    // Obtener el agente de usuario del navegador
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    // Obtener el nombre del navegador
    $browser = Nombre_Navegador($user_agent);

    // Mostrar el resultado
    echo "<p>Estás usando el navegador: $browser</p>";
    ?>
    </center>
</body>
</html>