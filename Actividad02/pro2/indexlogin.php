<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/plugins.config.js"></script>

        <link type="text/css" rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="js/toastr/toastr.min.css"/>
        <link type="text/css" rel="stylesheet" href="css/application.css" />
    <title>login</title>
</head>
<body>
        <div class="page">
            <div class="page-main">                
                <!-- conteúdo - pode ser carregado dinamicamente quando utilizando urls amigáveis -->
                <?php include_once('views/login.php'); ?>
            </div>
        </div>  
</body>
</html>