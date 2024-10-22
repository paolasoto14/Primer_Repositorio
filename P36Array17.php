<?php
 /*CBTIS 89
 P36Array17.php
 Programa que...
 Danna Paola Soto Flores
 3°A  Programación Matutino */ 

   $Maquillaje = array("Labial"=>"85", "Rubor"=>"120","Primer"=>"300", "Rizador"=>"70","Rimel"=>"200","Base"=>"350");
   echo "**TIENDA DE MAQUILLAJE FLORES**","<br>","<br>";
   foreach ($Maquillaje as $x => $precio)
   {
      echo "El Producto " . $x . " esta en ". $precio;
      echo "<br>", "<br>";
   }


   $Floreria = array("Girasoles"=>"450", "Rosas Rojas"=>"350", "Rosa Arreglada"=>"35");
   echo "**FLORERIA FLORES**","<br>","<br>";
   foreach ($Floreria as $x => $precio)
   {
   	echo "El Ramo " . $x . " esta en ". $precio;
   	echo "<br>", "<br>";
   }
?>