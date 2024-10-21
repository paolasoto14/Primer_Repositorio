<?php
/*CBTIS 89
  Programa que...
  Danna Paola Soto Flores
  3°A Programacion Matutino
  */
$venta = array("$40"=>"Manzana","25"=>"Mango","$40"=>"Limón","35"=>"Naranja","20");
echo "*FRUTERIA DEL NORTE*","<br>","<br>";
foreach($venta as $precio=>$Fruta)
{echo "El Kilo de " . $Fruta . " cuesta " . $precio;
echo "<br>","<br>";
}
?>