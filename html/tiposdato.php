<?php
$nombre="Juan";
$edad=35;
$nota=7.5;

ob_start();
var_dump($nombre);
$tiponombre=ob_get_clean();
ob_start();
var_dump($edad);
$tipoedad=ob_get_clean();
ob_start();
var_dump($nota);
$tiponota=ob_get_clean();


//echo"nombre:$tipo1 $nombre";
echo"Variable de nombre es: $tiponombre";
echo"Variable de edad es: $tipoedad";
echo"Variable de nota es: $tiponota";
?>