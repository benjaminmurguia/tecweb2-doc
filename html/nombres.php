<?php

//en base a los sgtes. arreglos realizar una funcion para generar N numeros
//de nombres de forma aleatoria
//ej: 4 nombres completos
//[0] => Ana Rodríguez
//[1] => Ana Pérez
//[2] => Miguel Díaz
//[3] => Juan García

$nombres =array("Juan","Maria","Pedro","Ana","Luis","Laura","Carlos","Sofia","Miguel","Elena");
$apellidos = array(
    "García",
    "Rodríguez",
    "González",
    "Fernández",
    "López",
    "Martínez",
    "Sánchez",
    "Pérez",
    "Gómez",
    "Díaz");

function nombres_completos($n_elementos){

    global $nombres;
    global $apellidos;
    $nom_completos=array();
    for ($i = 0; $i < $n_elementos; $i++) {

        $nombre=$nombres[array_rand($nombres)];
        $apellido=$apellidos[array_rand($apellidos)];
        $nom_completos[]=$nombre." ".$apellido;

    }
    return $nom_completos;


}


print_r(nombres_completos(4));
//echo $nombres[]." ".$apellidos[];
?>
