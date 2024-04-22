<?php
    function contarLetra($frase, $letra) {
        $count = 0;
        for ($i = 0; $i < strlen($frase); $i++) {
            if ($frase[$i] == $letra) {
                $count++;
            }
        }
        return $count;
    }

    function contarVocales($frase) {
        $vocales = array('a', 'e', 'i', 'o', 'u');
        $vocales_count = array();
        foreach ($vocales as $vocal) {
            $vocales_count[$vocal] = contarLetra($frase, $vocal);
        }
        return $vocales_count;
    }

    function contarCadaVocal($vocales_count){
        foreach ($vocales_count as $vocal => $count) {
            if ($count > 0) {
                echo "$vocal:$count, ";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO04
    </title>
</head>
<body>
    <center>
    <h2>Análisis de Frase</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="frase">Ingrese una frase:</label><br>
        <input type="text" id="frase" name="frase"><br><br>
        <input type="submit" value="Analizar">
    </form>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la frase ingresada por el usuario
        $frase = $_POST["frase"];
        $frase=strtolower($frase);
        // Contar la cantidad de veces que aparece la letra "o"
        $o_count = contarLetra($frase, 'o');
        echo "<p>Letra 'o' cantidad de veces: <br> $frase → $o_count</p>";

        // Cantidad de vocales que aparecen en la frase
        $vocales_count = contarVocales($frase);
        $vocales_total = array_sum($vocales_count);
        echo "<p>Vocales que aparecen: <br>";
        print_r($frase." → ".$vocales_total);  
        echo "</p>";

        // Mostrar cuántas veces aparece cada una de las vocales
        echo "<p>Cantidad de veces que aparece cada vocal:<br> $frase → ";
        contarCadaVocal($vocales_count);
        echo "</p>";
    }
    
    ?>
    </center>
</body>
</html>