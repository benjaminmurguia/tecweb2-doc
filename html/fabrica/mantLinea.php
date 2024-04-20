<?php
session_start();
$usuario=$_SESSION["usuario"];
$token=$_SESSION["token"];
//----- Validar Caducidad del Token
ini_set('display_errors','off');
if(file_get_contents("http://localhost:9090/linea?access_token=".$token) === FALSE){
    echo("Realizar la petici&oacute;n de c&oacute;digo Token...!");
    return;
}
ini_set('display_errors','on');
//---------------------------------
$url="http://localhost:9090/linea?access_token=".$token;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

//----- Leer registros de la tabla trabajador utilizando el token
$contenido=file_get_contents(
    "http://localhost:9090/linea?access_token=".$token
);

//echo($contenido);
$dataLinea=json_decode($contenido,true);

function guardarLinea($tipo){
	$curl=curl_init($url);
	curl_setopt($curl, CURLOPT_BODY);
}

if(isset($_POST["btnNuevo"])){
$tipo=$_POST["txttipo"];
	$respuesta=guardarLinea($tipo);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/40a42e87f5.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/linea2.css">
	<title>Linea</title>
</head>
<body>
<div class="container">
	<div class="container__table">
		<div class="table">
			<table>
			 	<thead>
			  		<tr>
			    		<th scope="col">Codigo</th>
			    		<th scope="col">Tipo</th>
			   		</tr>
			 	</thead>
			  	<tbody>
			    	<?php
			    		foreach ($dataLinea as $value) {
			    			echo("<tr>");
		                    echo("<td>".$value['id_linea']."</td>");
		                    echo("<td>".$value['tipo']."</td>");

		                    echo("</tr>");
			    		}
			    	?>
			  	</tbody>
			</table>
		</div>
	</div>
	<div class="container__form">
		<form action="">
		<div class="form">
			<h2>Registrar</h2>
			<div class="form-field">
				<input type="text" required placeholder="Ingrese el Nombre"  maxlength="1">
			</div>
			<button type="submit">Nuevo   <i class="fa-solid fa-plus"></i></button>
		</div>
		</form>
		
	</div>
</div>
</body>
</html>
