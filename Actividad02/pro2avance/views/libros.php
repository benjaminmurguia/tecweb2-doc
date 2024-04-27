<?php
// Iniciar la sesión
session_start();

// Verificar el estado de la sesión
/* if (!isset($_SESSION["username"])) {
    header("Location: indexlogin.php");
    exit();
} */

$username = $_SESSION["username"];
?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Crud </title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">


        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/plugins.config.js"></script>

        <link type="text/css" rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="js/toastr/toastr.min.css"/>
        <link type="text/css" rel="stylesheet" href="css/application.css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>   
    <?php include 'header.php'; ?> <!-- Incluir el menú -->

<div class="container mt-5">
    <h1>Página de Libros</h1>
    
    <div class="page">
            <div class="page-main">                
                <!-- conteúdo - pode ser carregado dinamicamente quando utilizando urls amigáveis -->
                
<div id="users" class="container">

	<h3 class="mt-3 mb-3">Libros </h3>
	<div id="users-filter" class="card card-default content-header">	
		<div class="card-header">
			<div class="row">									
		        <div class="form-group col-sm-8 col-md-6 col-lg-5 col-xl-4">
		            <div class="input-group">
		                <input id="key" name="key" class="form-control" type="text">
		                <span class="input-group-append">
		                    <button class="btn btn-primary btn-src-send" type="button">Buscar</button>
		                </span>
		            </div>
		        </div>
				<div class="d-sm-none d-md-block col-md-3 col-lg-4 col-xl-6"></div>
				<div class="form-group col-sm-4 col-md-3 col-xl-2">								
				<button id="newUsersBtn" onclick="openPopEditUsers('')" class="btn btn-primary btn-block">Añadir usuario</button>
				</div>						
			</div>
		</div>			
	</div>
	
	<div id="data-holder" class="table-responsive">
		<table id="users-data-table" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Nombre Libro</th>
					<th>Archivo</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
		</table>
		<div class="data-loader alert alert-info" style="display: none;">buscando datos... <img src="images/loader.gif" alt="buscando dados..."></div>
	</div>
	<!-- inclui o javascript que controla o view-->
	<script src="views_js/users.js"></script> 
	<!-- inclui a janela de edição ou criação de usuário -->
	<div id="popEditUsers" class="modal fade" data-backdrop="static">
	
	
		
		
</div>

<script src="views_js/users/popEditUsers.js"></script>


</div>


            </div>
        </div>      
</div>

<!-- Enlaces a los archivos JavaScript de Bootstrap (jQuery y Popper.js) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    </body>
</html>