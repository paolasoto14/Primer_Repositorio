<?php
/* CBTIS 89
P39Array19.php
Programa que almacene información de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes condiciones:
Si la persona es menor de 18 años se debe colocar un 1 en el arreglo $Grupo1 y en los otros dos colocar un 0.
Si la persona tiene entre 18 y 49 años se debe colocar un 1 en el arreglo $Grupo2 y en los otros dos colocar un 0.
Si la persona tiene 50 años o más se debe colocar un1 en el arreglo $Grupo3, y en los otros dos un 0.

Danna Paola Soto Flores
3°A Programación Matutino */
 
 $Nombre = array("Keira","Daniel","Axel","Alexander","María","Paola");

 $Edad = array(17,30,71,38,12,58);
 $Grupo1 = array();
 $Grupo2 = array();
 $Grupo3 = array();

 $longitud=count($edad);

 for ($i=0;$i<$longuitud;$i++)
     {
 	if ($edad[$i]<17)
    {array_push($Grupo1,1);
    	array_push($Grupo2,0);
    	array_push($Grupo3,0)}
 }

 for ($i=0;$i<$longuitud;$i++)
     {
 	if ($edad[$i]<30)
    {array_push($Grupo1,1);
    	array_push($Grupo2,0);
    	array_push($Grupo3,0)}
 }

 for ($i=0;$i<$longuitud;$i++)
     {
 	if ($edad[$i]<71)
    {array_push($Grupo1,1);
    	array_push($Grupo2,0);
    	array_push($Grupo3,0)}
 }

 for ($i=0;$i<$longuitud;$i++)
     {
 	if ($edad[$i]<38)
    {array_push($Grupo1,1);
    	array_push($Grupo2,0);
    	array_push($Grupo3,0)}
 }

 for ($i=0;$i<$longuitud;$i++)
     {
 	if ($edad[$i]<12)
    {array_push($Grupo1,1);
    	array_push($Grupo2,0);
    	array_push($Grupo3,0)}
 }

 for ($i=0;$i<$longuitud;$i++)
     {
 	if ($edad[$i]<58)
    {array_push($Grupo1,1);
    	array_push($Grupo2,0);
    	array_push($Grupo3,0)}
 }

 echo "<br>";
 echo "&nbsp"."CBTIS 89"."<br>";
 echo "Nom"."&nbsp"."Edad"."Grupo1"."Grupo2"."Grupo3"."<br>";
 for($i=0;$i<6;$i++)
 	{echo $nombre[$i]." --- ". $Edad[$i]." --- ". $Grupo1[$i]." --- ". $Grupo2[$i]." --- ". $Grupo3[$i]. "<br>";}
?>