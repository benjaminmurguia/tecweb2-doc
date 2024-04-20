<?php
include 'funcao.php';
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

switch ($operacao){
    case 'soma':
        soma($numero1,$numero2);
        break;

    case 'subtracao':
        subtracao($numero1,$numero2);
        break;

    case 'multiplicacao':
      multiplicacao($numero1,$numero2);
        break;
        case 'divisao':
               divisao($numero1,$numero2);
        break;

    default:
        total("operacao inválida");
    }

/*$saldo = 1000;
$desconto = 10;
soma(desconto($saldo,$desconto),100);

$total = soma(soma(multiplicacao(1,1),multiplicacao(2,2)),multiplicacao(multiplicacao(3,3),multiplicacao(4,4)));
total($total);*/