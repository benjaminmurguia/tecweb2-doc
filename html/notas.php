<?php
//1era forma alumno
$nota=array();

for ($i=0; $i < 10; $i++) { 
    $nota[$i]=rand(0,10);
    echo "Nota $i=$nota[$i] es ";

 switch ($nota[$i]) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        echo "insuficiente <br>";
        break;
    case 5:
        echo "suficiente<br> ";
        break;
    case 6:
        echo "bien<br> ";
        break;
    case 7:
    case 8:
        echo "notable<br> ";
        break;
    case 9:
    case 10:
        echo "sobresaliente <br>";
        break;
    }
}
echo " <br>";
//forma docente
$notas=array();
for ($i=0; $i < 10; $i++) { 
    $notas[$i]=rand(0,10);
}
for ($i=0; $i < 10; $i++) { 

    echo "Nota $i=$notas[$i] es ";

    switch ($notas[$i]) 
    {
        case 0:case 1:case 2:case 3:case 4:
            echo "insuficiente<br> ";
            break;
        case 5:
            echo "suficiente<br>  ";
            break;
        case 6:
            echo "bien<br>  ";
            break;
        case 7:case 8:
            echo "notable<br>  ";
            break;
        case 9:case 10:
            echo "sobresaliente<br>  ";
            break;
        }
}
?>