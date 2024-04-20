<?php 
function total($valor){
    echo "Total do processamento é:".$valor."<br>";
}

function soma($num1,$num2){
    $resultado = $num1+$num2;
    total($resultado);
    return $resultado;
}

function subtracao($num1,$num2){
    $resultado = $num1-$num2;
   total($resultado);
}

function multiplicacao($num1,$num2){
    $resultado = $num1*$num2;
    total($resultado);
    return $resultado;
}

function divisao($num1,$num2){
    
    if($num2==0){
       total('não é possivel dividir por zero');
    } else {
    $resultado = $num1/$num2;
    total($resultado);
    }
}











function desconto($saldo,$desconto){
    $saldo=$saldo-$desconto;
    echo $saldo;
    return $saldo;
}








