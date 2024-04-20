<?php

/* Escribe una función llamada inicializar_array que reciba tres parámetros llamados numero_de_elementos
, min y max, y que devuelva un array de números enteros(radomicos) comprendidos entre los valores min y max.
El número de elementos que contiene el array será el especificado en el parámetro de entrada
numero_de_elementos */

$numeros =array();

function inicializar_array($n_elementos,$min,$max){

    global $numeros;
    for ($i=0; $i <$n_elementos ; $i++) { 
        $numeros[]=rand($min,$max);
    }
    //$n_elementos=array_rand();
    //
    echo"hola".$n_elementos;

}
/* $n_elementos=5;
$min=1;
$max=5; */
inicializar_array(10,5,50);
print_r($numeros);
?>
