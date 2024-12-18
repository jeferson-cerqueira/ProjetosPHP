<?php

$n1 = $_GET["a"];
$n2 =2;

$ip = ($n1 % $n2) !== 0 ? "numero impar" : "numero par";   

echo "o numero é $ip";



/*calculara se o numero é impar ou par  */
