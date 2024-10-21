<?php
/* CBTIS 89
   Programa que
   Danna Paola Soto Flores
   3°A Programacion Matutino
*/
   $ropa = array("Playera"=>"100", "Camisa"=>"250","Pantalon"=>"300", "Bermuda"=>"200");
   echo "**TIENDA DE ROPA FLORES**","<br>","<br>";
   foreach ($ropa as $x => $precio)
   {
      echo "La prenda " . $x . " esta en ". $precio;
      echo "<br>", "<br>";
   }
?>