<?php
/* CBTIS 89
   Programa que 
   Danna Paola Soto Flores
   3°A Programacion Matutino
*/ 
$cheque=5793;
echo "El cheque vale por ", $cheque, "pesos ";echo "<br>";
$B1000=floor($cheque/1000);
$cheque=$cheque%1000;echo "<br>";
echo "La cantidad de billetes de mil pesos es: ",$B1000;echo "<br>";
echo "<br>", $cheque;echo "<br>";
$B500=floor($cheque/500);
$cheque=$cheque%500;
echo "La cantidad de billetes de quinientos pesos es: ",$B500;echo "<br>";
echo "<br>", $cheque;echo "<br>";
$B200=floor($cheque/200);
$cheque=$cheque%200;echo "<br>";
echo "La cantidad de billetes de docientos pesos es: ",$B200;echo "<br>";
echo "<br>", $cheque;echo "<br>";
$B100=floor($cheque/100);
$cheque=$cheque%100;echo "<br>";
echo "La cantidad de billetes de cien pesos es: ",$B100;echo "<br>";
echo "<br>", $cheque;echo "<br>";
$B50=floor($cheque/50);
$cheque=$cheque%50;echo "<br>";
echo "La cantidad de billetes de cincuenta pesos es: ",$B50;echo "<br>";
echo "<br>", $cheque;echo "<br>";
$B20=floor($cheque/20);
$cheque=$cheque%20;echo "<br>";
echo "La cantidad de billetes de veinte pesos es: ",$B20;echo "<br>";
echo "<br>", $cheque;echo "<br>";
$B10=floor($cheque/10);
$cheque=$cheque%10;echo "<br>";
echo "La cantidad de monedas de diez pesos es: ",$B10;echo "<br>";
echo "<br>", $cheque;echo "<br>";
$B5=floor($cheque/5);
$cheque=$cheque%5;echo "<br>";
echo "La cantidad de monedas de cinco pesos es: ",$B5;echo "<br>";
echo "<br>", $cheque;echo "<br>";
$B2=floor($cheque/2);
$cheque=$cheque%2;echo "<br>";
echo "La cantidad de monedas de dos pesos es: ",$B2;echo "<br>";
echo "<br>", $cheque;echo "<br>";
$B1=floor($cheque/1);
$cheque=$cheque%1;echo "<br>";
echo "La cantidad de monedas de apeso pesos es: ",$B1;echo "<br>";
echo "<br>", $cheque;echo "<br>";
?>