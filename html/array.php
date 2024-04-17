<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $edades = array("Juan" => "0", 
                    "María" => "0", 
                    "Paco" => "0", 
                    "Pedro" => "0", 
                    "Jose" => "0");
    //ingresar edades impares al array de edades
    
    //for ($i=0; $i < 5; $i++) { 
        
    
    $valor=rand(20,80);
    
    while ($valor%2!=0) {

    foreach ($edades as $clave => $valor) {
        $valor=rand(20,80);
        if ($valor%2!=0) {
        
            # code...
        
            echo "Clave: " . $clave . " - Valor: " . $valor;
            echo "<br>";
        }
        }
    }
//}
    //realizar los cambios necesarios para agregar 5 elementoos de edad
    //de forma randomica entre 20 80 años, solo se tomara en cuenta los numeros impares
    ?>

</body>
</html>