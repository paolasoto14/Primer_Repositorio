<?php
/* CBTIS 89
   P21Array3.php
   Programa que almacena los nombres en un arreglo y posteriormente los imprime por medio de un ciclo for
   Danna Paola Soto Flores
   3°A Programación Matutino */
$arraynombres= array("Daniel", "Jesús", "Jorge",                                                         "Diego", "Emilio", "Keira", "Karen", "Axel");

//Se obtiene el número de elementos
$longitud = count($arraynombres);

//Recorre todos los elementos
for ($i=0; $i<longitud; $i++)
{//Se obtiene el valor de cada elemento
echo $arraynombres[$i];
echo "<br>";
   }
?>