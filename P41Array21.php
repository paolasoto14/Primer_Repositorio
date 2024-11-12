<?php
/*CBTIS 89 
P41Array21.php
Programa que...
Danna Paola Soto Flores
3°A Programación Matutino */

$Compras=array(550,1450,1900,3500,7500,250);
$Descuento=array();
$Total=array();
$Porcentaje=array();
$desc=0;

echo "Precio","---"," Total ","-----","Descuento","------","Porcentaje","<br>";
for ($i=0; $i<6; $i++) {
	if ($Compras[$i]<300){
		array_push($Porcentaje,0);
	} else if ($Compras[$i]>300&&$Compras[$i]<=1000){
		array_push($Porcentaje,10);
	} else if ($Compras[$i]>1000&&$Compras[$i]<=2500){
	    array_push($Porcentaje,15);
	} else if ($Compras[$i]>2500&&$Compras[$i]<=5000){
		array_push($Porcentaje,20);
	} else if ($Compras[$i]>5000){
		array_push($Porcentaje,25);
	}
    }

for ($i=0; $i<6; $i++) {
	$desc=$Compras[$i]*$Porcentaje[$i]/100;
	array_push($Descuento,$desc);
}
for ($i=0; $i <6; $i++){
	$Total[$i]=$Compras[$i]-$Descuento[$i];
	echo $Compras[$i],"- - - -",$Descuento[$i],"- - - - -",$Total[$i],"- - - - - -",$Porcentaje[$i],"%","<br>";
}
?>