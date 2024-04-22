
<?php
     function formatearNombreApellido($palabra) {
        return ucfirst(strtolower($palabra));
    }
    function aleatorio($palabra_aleatoria){
        $palabra = $palabra_aleatoria[array_rand($palabra_aleatoria)];
        return $palabra;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,text-aling=center">
    <title>EJERCICIO05
    </title>
</head>
<body>
    <center>
    <h2>Combinación de Nombres y Apellidos</h2>

    <?php
    // Arrays de nombres y apellidos
    $nombres = array("alberto", "sara", "manuel", "jose", "carlos");
    $apellidos = array("hernández", "garcía", "gutiérrez", "moreno", "alvarez");
   
    // Nuevo array 
    $combinaciones = array();

    //Combinaciones aleatorias
    $max = min(count($nombres), count($apellidos));

    for ($i = 0; $i < $max; $i++) {
        // Obtener un nombre y un apellido aleatorio
        $nombre = aleatorio($nombres);
        $apellido = aleatorio($apellidos);

        // Formatear el nombre y el apellido
        $nombre_formateado = formatearNombreApellido($nombre);
        $apellido_formateado = formatearNombreApellido($apellido);

        // Almacenar la combinación en el nuevo array
        $combinaciones[] = "$nombre_formateado $apellido_formateado";

        // Eliminar el nombre y el apellido usados para evitar repeticiones
        unset($nombres[array_search($nombre, $nombres)]);
        unset($apellidos[array_search($apellido, $apellidos)]);
    }

    // Mostrar las combinaciones generadas
   // echo "<ul>";
    foreach ($combinaciones as $combinacion) {
        echo "$combinacion <br>";
    }
   // echo "</ul>";
    ?>
    </center>
</body>
</html>