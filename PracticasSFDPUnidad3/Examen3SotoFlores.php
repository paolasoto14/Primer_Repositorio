<?php
/*CBTIS 89 
Programa que almacena el nombre de cuatro personas en un arreglo $alumnos y en otro arreglo miltidimensiona llamado $Calificaciones almacena las califcaciones de cada uno de ellos por medio de filas y columnas.
Danna Paola Soto Flores
3°A Programación Matutino */

$Alumnos = array();
$Calificaciones = array( 
array(6, 4, 5),array(7, 9, 8),array(7, 9, 5),array(5, 4, 6));
$Promedio = array();
$Status = array();

echo  "CBTIS 89","<br>","Alumnos"," ","Promedio"," ","Status","<br>";

echo "Calificaciones";
echo "<br>";

for($i=0;$i<4;$i++)
	{ for($j=0;$j<3;$j++)
		{echo $Calificaciones[$i][$j]."";}
		echo "<br>";
	}