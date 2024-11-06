<?php
/*CBTIS 89 
Danna Paola Soto Flores
3°A Programación Matutino */ 

$arraynumeros=array(-4,8,17,-11,-3,1,20,-30,21,50,-73,-7,-10,-8);

$arrayPositivos=array();
$arrayNegativos=array();
$suma_Positivos=0;
$suma_Negativos=0;

foreach ($arraynumeros as $numero) {
	if ($numero > 0 ) {
		$arrayPositivos[] =  $numero;
		$suma_Positivos += $numero;
	}else {
		$arrayNegativos[] =  $numero;
		$suma_Negativos -= $numero;
	}
}
echo "NUmeros Positivos: ";
foreach ($arrayPositivos as $Positivo) { 
echo $Positivo . " ";
}
echo "NUmeros Negativos: ";
foreach ($arrayNegativos as $Negativo) { 
echo $Negativo . " ";
}
echo "<br>la suma de Negativos es: $suma_Negativos<br>";
?>