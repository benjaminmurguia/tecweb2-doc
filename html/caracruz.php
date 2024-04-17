<?php
$num=1;
/* if ($num == 1) {
    $comp= '<img  src="/img/148229.svg" width="300px" height="300px">';
    echo $comp;
} elseif ($num == 2) {
    $comp= '<img src="/img/148230.svg" width="300px" height="300px">';
    echo $comp;
} */

$moneda=rand(0,1);
    if ($moneda){
        $comp= '<img  src="/img/148229.svg" width="300px" height="300px">'; 
        echo $comp;
    }
    else{
        $comp= '<img  src="/img/148230.svg" width="300px" height="300px">'; 
        echo $comp;
    }

?>