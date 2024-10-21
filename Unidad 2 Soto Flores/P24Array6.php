<?php
/* CBTIS 89
   Programa que
   Danna Paola Soto Flores
   3°A Programacion Matutino
*/ 
   $alumnos = array("Programacion"=>"Manuel","Contabilidad"=>"Erick","Recursos Humanos"=>"Itzel","Logistica"=>"Keira","Arquitectura"=>"Daniel");
   echo "*ALUMNOS CBTIS 89*","<br>","<br>";
   foreach($alumnos as $carrera=>$alumno)
   {echo "El alumno del CBTIS 89" . $alumno . "esta en la carrera de ". $carrera;
echo "<br>","<br>";
}
?> 