<?php
    function Validar_Contra($usuario, $contraseña) {
        // Array de usuarios válidos y sus contraseñas
        $usuarios_validos = array(
            "juan" => "D153n0W3b2",
            "pedro" => "D153n0W3b2",
            "maria" => "D153n0W3b2",
            "raul" => "D153n0W3b2"
        );

        // Verificar si el usuario existe y la contraseña es correcta
        if (array_key_exists($usuario, $usuarios_validos) && $usuarios_validos[$usuario] === $contraseña) {
            return true;
        } else {
            return false;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO02
    </title>
</head>
<body>
    <center>
    <h2>Iniciar sesión</h2>
    <?php   

    // Variables para el usuario y la contraseña
    $usuario = "";
    $contraseña = "";

    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores ingresados
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];

        // Validar el usuario y la contraseña utilizando la función
        if (Validar_Contra($usuario, $contraseña)) {
            echo "<p>¡Bienvenido, $usuario!</p>";
        } else {
            echo "<p>Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.</p>";
        }
        echo '<a href="ac01ej2.php" class="boton">VOLVER</a>';

    }
    else{
        echo '<form method="post" action="" >
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" value=""><br><br>
        <label for="contraseña">Contraseña:</label><br>
        <input type="password" id="contraseña" name="contraseña"><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>';
    }
    ?>

    </center>
</body>
</html>
