<?php
        function Primo($numero) {
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

        function generarPrimos($cant)
        {
            for ($i = 1; $i <= $cant; $i++) {              
                $numerorand = rand(1, 100);                
                if (Primo($numerorand)) {
                    echo "$numerorand es primo. <br>";
                } else {
                    echo "$numerorand no es primo. <br>";
                }   
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Primos</title>
</head>
<body>
    <?php

        if (isset($_POST['numero'])) {
            $cant=$_POST['numero'];
            echo "numero recibido es ".$cant."<br>";
            echo "<h3>NUMEROS PRIMOS:</h3>";
            generarPrimos($cant);
            
            echo '<a href="numeroprimo.php" class="boton">VOLVER</a>';
          
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