<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario1</title>
</head>
<body>
    <?php
        if (isset($_POST['numero'])) {
            $numero=$_POST['numero'];
            echo "numero recibido es ".$numero."<br>";

            echo "<h3>Tabla de multiplicar del $numero:</h3>";
            echo "<table border='1'>";


            for ($i = 1; $i <= 10; $i++) {
                echo "$numero x $i = ".$numero*$i. "<br>";
                //$resultado = $numero * $i; //tabla
                //echo "<tr><td>$numero x $i</td><td>=</td><td>$resultado</td></tr>"; //tabla

            }
            echo "</table>";   

            echo '<a href="tabla.php" class="boton">VOLVER</a>';

//////////////////////////metodo ARRAY//////////////////////////777

            $numero = $_POST["numero"];

            $tabla_multiplicar = array();

            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                $tabla_multiplicar[] = "$numero x $i = $resultado";
            }
// Imprimir la tabla de multiplicar como un array
            echo "<h3>Tabla de multiplicar del $numero:</h3>";
            echo "<pre>";
            print_r($tabla_multiplicar);
            echo "</pre>";
        }

        else
            echo '<form method="Post" action="">
            <label for="numero"> Introduce un numero. </label>
            <input type="number" id="numero" name="numero">
            <button type="submit">ENVIAR</button>
        </form>';
        
    ?>

</body>
</html>