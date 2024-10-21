<?php
/* CBTIS 89
   P20Array2.php
   Programa que almacena diversos datosen un arreglo y posteriormentelos imprime por medio de un ciclo for
   Danna Paola Soto Flores
   3°A Programación Matutino */
   $nombre = "Elena";
   $array = array(1, 2, 3, "casa", $nombre);

   //Se obtiene el número de elementos
   //$longitud = count0($array);

   //Recorre todos los elementos 
   for($i=0; $i<5; $i++)
   	{ //Se obtiene el valor de cada elemento
   		echo $array[$i];
   		echo "<br>";
   	}
?>
 