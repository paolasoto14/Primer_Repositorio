<?php
/* CBTIS 89 
   Programa que 
   Danna Paola Soto Flores 
   3°A Programación Matutino */

echo "**ARREGLO PRECIOS**", "<br>" , "<br>";

$arrayPrecios = array (500,400,200,700,100);
$arrayIVA = array ();
$arraySubtotal = array ();
$arrayDescuentos = array ();
$arrayTotal = array ();
$longitud = count ($arrayPrecios);

echo "**ARREGLO IVA**", "<br>" , "<br>";

for ($i=0; $i<$longitud; $i++)
	{$arrayIva=0.16*$arrayPrecios[$i];
		echo " ", $arrayIva;
		echo "<br>";
}
echo "**ARREGLO SUBTOTAL**", "<br>" , "<br>";

for ($i=0; $i<$longitud; $i++)
	{$arraySubtotal=$arrayIva[$i]+$arrayPrecios[$i];
    	echo " ", $arraySubtotal;
		echo "<br>";
}
echo "**ARREGLOS DESCUENTOS**", "<br>" , "<br>";

 for ($i=0; $i<$longitud; $i++)
 	{$arrayDescuentos[$i]=0.10*$arraySubtotal[$i];
 		echo " ", $arrayDescuentos;
		echo "<br>";
}
echo "**ARREGLO TOTAL**", "<br>" , "<br>";

for ($i=0; $i<$longitud; $i++)
	{$arrayTotal=$arrayDescuento[$i]-$arraySubtotal[$i];
 		echo " ", $arrayTotal;
		echo "<br>";
}
?>