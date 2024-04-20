<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/40a42e87f5.js" crossorigin="anonymous"></script>
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
    <div class="container__form">
        <div class="cover-form">
            <img src="img/fabrica_fondo.jpg" alt="">
        </div>
        <div class="data-form">
            <form name="frmsesion" action="login.php" method="post">
                <h2>Bienvenido!</h2>
                <div class="field-form">
                    <input type="text" placeholder="Ingresa tu Username" name="txtus" maxlength="20" required autocomplete="off">
                </div>
                <div class="field-form">
                    <input type="password" placeholder="Ingresa tu Contraseña" name="txtpa" maxlength="20" required autocomplete="off">
                </div>
                <hr style="width: 100%; border: none; height: 1px; background: #fff; margin: 10px 0">
                <div class="field-form">
                    <input type="text" placeholder="Ingresar Credencial" name="txtcredus" maxlength="20" required autocomplete="off">
                </div>
                <button type="submit" name="btnLogin"><i class="fa-solid fa-right-to-bracket"></i>Iniciar Sesión</button>
            </form>
        </div>
    </div>    
    </body>
</html>

<?php
function enviardatos($url,$user,$password, $credus){
    $curl=curl_init($url);//para iniciar el servicio curl, para consumir el servicio api
    curl_setopt($curl,CURLOPT_POST,true);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    //----- Credencial ---------
    curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query(
        array(
            "username" => $credus,
            "password" => "123456",
            "grant_type" => "password"
        )
    ));
    //----- Autorizacion Basica 
    curl_setopt($curl,CURLOPT_HTTPHEADER,array(
        'Authorization: Basic '.base64_encode($user.":".$password),
        'Content-Type: application/x-www-form-urlencoded'
    ));
    
    $resp=curl_exec($curl);
    curl_close($curl);

    return $resp;
}

if(isset($_POST["btnLogin"])){
    $user=$_POST["txtus"];
    $password=$_POST["txtpa"];
    $url="http://localhost:9090/oauth/token";
    $credus=$_POST["txtcredus"];
    $respuesta=enviardatos($url, $user, $password, $credus);
    $respuesta=json_decode($respuesta, true);    
    ini_set('display_errors','off');
    if($respuesta['error']=='Unauthorized'){
        echo "<center><div class='alert'>
                          Usuario no autorizado...!
                    </div></center>";
        return;
    }
    //----- Validar credencial -----
    if($respuesta['error']=='invalid_grant'){
        echo "<center><div class='alert'>
        Credencial no Valida...!
  </div></center>";
        return;
    }
    //-----------------------------------------------
    ini_set('display_errors','on');
    $token=$respuesta["access_token"];

    //----- Guardar datos en variables de sesión -----
    session_start();
    $_SESSION["usuario"]=$usuario;
    $_SESSION["token"]=$token;
    header("Location:menu.php");
    //------------------------------------------------
}
?>