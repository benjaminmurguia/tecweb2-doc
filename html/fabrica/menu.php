
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/40a42e87f5.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <title>Menu</title>

	 <script type="text/javascript">
            function ir(dato){
                var ventana=document.getElementById("contenedor");
                if(dato==1){
                    ventana.src="mantLinea.php";
                }
                if(dato==2){
                    ventana.src="mantProducto.php";
                }
                if(dato==3){
                    ventana.src="mantFabrica.php";
                }
            }
        </script>
        <style type="text/css">
    		html, body, div, iframe { margin:0; padding:0; height:100%; }
    		iframe { display:block; width:100%; border:none; }
		</style>
</head>
<body>
	<header>
        <div class="header__superior">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="search">
                <input type="search" placeholder="¿Que deseas buscar?">
            </div>
        </div>

        <div class="container__menu">
            <div class="menu">
                <input type="checkbox" id="check__menu">
                <label for="check__menu" id="label__check">
                    <i class="fas fa-bars icon__menu"></i>
                </label>
                <nav>
                    <ul>
                        <li><a href="#" id="selected"></a></li>
                        <li><a href="#">Mantenimientos</a>
                            <ul>
                                <li><a href="#" onclick="ir(1);" name="btn1" id="btn1">Linea</a></li>
                                <li><a href="#" onclick="ir(2);" name="btn2" id="btn2">Productos</a></li>
                                <li><a href="#" onclick="ir(3);" name="btn3" id="btn3">Fabrica</a></a></li>
                                <li><a href="#">Piezas</a></li>
                                <li><a href="#">Analista</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Cursos</a></li>
                        <li><a href="login.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<main>
    <iframe width="100%" name="contenedor" id="contenedor" frameborder="0">
    </iframe>
</main>

</body>
</html>

<?php
if(isset($_POST["btn4"])){
header("Location:login.php");}
?>