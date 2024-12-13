<?php
	$number1 = fgets(STDIN);
	$number2 = fgets(STDIN);
	
 echo "insira um numero ";
 echo "numero escolhido foi $number1";
 echo "digite outro numero ";
 echo " o numero escolhido foi $number2";

$soma = $number1+$number2;
$sub = $number1-$number2;
$mult = $number1*$number2;
$div = $number1/$number2;

 echo "a soma dos numeros é  $soma \n";
 echo "a subtração dos numeros é  $sub \n";
 echo "a multiplicação dos numeros é $mult \n";
 echo "a div dos numeros é $div \n";

//fgets(STDIN): Lê uma linha de entrada do teclado
?>
