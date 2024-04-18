<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario1</title>
</head>
<body>
    <?php
        if (isset($_GET['texto'])) {
            $texto=$_GET['texto'];
            echo "Texto recibido es ".$texto."<br>";
            
        }
        else
            echo '<form method="Get" action=""onkeyup>
            <label for="texto"> Introduce un texto. </label>
            <input type="text" id="texto" name="texto">
            <button type="submit">ENVIAR</button>
        </form>';
        
    ?>

<!--     quitar url del php para que aparezca
    <form method="Get" action=""onkeyup>
        <label for="texto"> Introduce un texto. </label>
        <input type="text" id="texto" name="texto">
        <button type="submit">ENVIAR</button>
    </form> -->
</body>
</html>