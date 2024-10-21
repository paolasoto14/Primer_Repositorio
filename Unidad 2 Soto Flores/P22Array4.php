<?php
/* CBTIS 89
   P22Array4.php
   Programa que almacena datos en un areglo y posteriormente los imprime
   Danna Paola Soto Flores
   3°A Programación Matutino */

   $equipo = array("portero"=>"Julio","defensa"=>"Diego","medio"=>"Jair","delantero"=>"Rafa");
    echo "** SELECCION NACIONAL **","<br>","<br>";
    foreach($equipo as $posicion=>$jugador)
      {echo "El jugador " . $jugador . "es el " . $posicion;
echo "<br>","<br>";
}
?>