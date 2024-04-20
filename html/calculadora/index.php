<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calcular.php" method="post">  
        <input type="text" name="numero1" id=""><br>
        <input type="text" name="numero2" id=""><br>
        <select name="operacao" id="">
        <option value="Selecione">Selecione</option>
            <option value="soma">Soma</option>
            <option value="subtracao">subtração</option>
            <option value="multiplicacao">Mutiplicação</option>
            <option value="divisao">Divisão</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>