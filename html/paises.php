<?php


//$aleatorio=rand(0,25);


$paises=array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "
Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "
Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "
Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "
Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"
Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

ksort($paises);

//$paises= strtoupper($paises);
//EJERCICIO1
foreach ($paises as $pais => $capital) {
    echo "La Capital de " .strtoupper($pais)." es ".strtoupper($capital)."<br>";
}
//EJERCICIO2
$aleatorio=array_rand($paises);
$listarand = $paises[$aleatorio];
echo"ALEATORIO<BR>";
echo"La capital de ". $paises[$aleatorio]." es ".$aleatorio;

?>
