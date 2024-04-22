
<?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
?>
    <!DOCTYPE html>
<html>
<head>
    <title>Números Primos Aleatorios</title>
</head>
<body>
    <center>
    <h2>Generar Números Primos Aleatorios Menores que 110</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="cantidad">Ingrese la cantidad de números primos a generar:</label><br>
        <input type="number" id="cantidad" name="cantidad" min="1" max="29" required><br><br>
        <input type="submit" value="Generar">
    </form>

    <?php
    // LOS NUMERO PRIMOS NO SE REPITEN Y SOLO EXISTEN 29 NUMEROS PRIMOS
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST["cantidad"];
        $numeros_primos = array();

        while (count($numeros_primos) < $cantidad) {
            $numero_aleatorio = rand(1, 109); // Generar número aleatorio entre 1 y 109
            if (esPrimo($numero_aleatorio) && !in_array($numero_aleatorio, $numeros_primos)) {
                $numeros_primos[] = $numero_aleatorio;
            }
        }

        // Mostrar los números primos generados
        echo "<p>Números primos generados:</p>";
        foreach ($numeros_primos as $numero) {
            echo "$numero<br>";
        }
        
    }
    ?>
    </center>
</body>
</html>
