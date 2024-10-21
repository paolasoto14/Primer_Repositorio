<?php
/* CBTIS 89
   Programa que
   Danna Paola Soto Flores
   3°A Programacion Matutino
*/
   $numeros = range(1, 100);
   for ($i =0; $i <count($numeros); $i++){
      if ($numeros[$i] %2 == 0) {
         echo $numeros[$i] . "<br>";
      }
   }
?>