<?php
/* CBTIS 89
   Programa que une cadenas de texto
   Danna Paola Soto Flores
   3°A Programacion Matutino
*/ 
 $nombres = array("Daniel", "Alexander", "Paola", "Erick", "Keira", "Axel");

 sort($nombres);
 echo "Datos del arreglo ordenados de manera ascendente con un ciclo for<br>";
 for ($i = 0; $i < count($nombres); $i++) {
 	echo $nombres[$i] . "<br>";
 }

array_push($nombres, "Alejandro", "Emilio", "Jorge", "María");

array_splice($nombres, 1, 2);

rsort($nombres);
echo "<br>Datos del arreglo ordenados de manera descendente con un ciclo for<br>";
for ($i =  0; $i< count($nombres); $i++){
   echo $nombres[$i] . "<br>";
}
echo "<br>El numero de elementos actual en el arreglo es de; " . count($nombres);
?>
