<?php
session_start();
$usuario=$_SESSION["usuario"];
$token=$_SESSION["token"];
//----- Validar Caducidad del Token
ini_set('display_errors','off');
if(file_get_contents("http://localhost:9090/producto?access_token=".$token) === FALSE){
    echo("Realizar la petici&oacute;n de c&oacute;digo Token...!");
    return;
}
ini_set('display_errors','on');
//---------------------------------
$url="http://localhost:9090/producto?access_token=".$token;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

//----- Leer registros de la tabla trabajador utilizando el token
$contenido=file_get_contents(
    "http://localhost:9090/producto?access_token=".$token
);

//echo($contenido);
$dataProducto=json_decode($contenido,true);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/producto.css">
    <script src="https://kit.fontawesome.com/40a42e87f5.js" crossorigin="anonymous"></script>
	<title>Producto</title>
</head>
<body>
<!--<div class="container" style="width: 50rem; margin-top: 10%">
	<div class="card">
	  <div class="card-body">
	    <h3 class="card-title text-center">Registros</h3>

		<div class="row">
	    <div class="col">
	      <table class="table table-primary mt-4 mb-4" style="width: 100%;">
			 	<thead>
			  		<tr>
			    		<th scope="col">Codigo</th>
			    		<th scope="col">Nombre</th>
			    		<th scope="col">Descripcion</th>
			   		</tr>
			 	</thead>
			  	<tbody class="table-group-divider">
			    	<?php
			    		foreach ($dataProducto as $value) {
			    			echo("<tr>");
		                    echo("<td>".$value['id_producto']."</td>");
		                    echo("<td>".$value['nombre']."</td>");
		                    echo("<td>".$value['descripcion']."</td>");
		                    echo("</tr>");
			    		}
			    	?>
			  </tbody>
		</table>
	    </div>
	    <div class="col">
                <div class="form-floating mb-3 mt-4">
                    <input type="text" class="form-control" placeholder="Ingrese nombre del Producto"
                    name="txtnom" maxlength="1" required autocomplete="off">
                    <label for="floatingInput">Nombre del Producto</label>
                </div>
                <div class="form-floating mb-3 mt-4">
                    <input type="text" class="form-control" placeholder="Ingrese descripción del Producto"
                    name="txtdesc" maxlength="1" required autocomplete="off">
                    <label for="floatingInput">Descripción del Producto</label>
                </div>
        	    <button id="btnNuevo" type="submit" name="btnNuevo" class="btn btn-primary btn-lg" style="width:100%; border-radius: 10px;">
   	 				Nuevo   <i class="fa-solid fa-plus" style="margin-left: 10px;"></i></button>
	    </div>
	  	</div>	
	  </div>
	</div>
</div>-->
<div class="container">
	<div class="container__table">
		<div class="table">
			<table>
					<thead>
						<tr>
							<th scope="col">Codigo</th>
							<th scope="col">Nombre</th>
							<th scope="col">Descripcion</th>
						</tr>
					</thead>
					<tbody">
						<?php
							foreach ($dataProducto as $value) {
								echo("<tr>");
								echo("<td>".$value['id_producto']."</td>");
								echo("<td>".$value['nombre']."</td>");
								echo("<td>".$value['descripcion']."</td>");
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
				<input type="text" class="form-control" placeholder="Ingrese nombre del Producto"
                    name="txtnom" maxlength="1" required autocomplete="off">
			</div>
			<div class="form-field">
				<input type="text" class="form-control" placeholder="Ingrese descripción del Producto"
                    name="txtdesc" maxlength="1" required autocomplete="off">
			</div>
			<button type="submit">Nuevo   <i class="fa-solid fa-plus"></i></button>
		</div>
		</form>
		
	</div>
</div>
</body>
</html>
