<?php 

$cantidad_1=12732.5;
$cantidad_2=1931.81;

//number_format(cantidad: $numero, decimales, sep_decimal: ".", sep_millar: ","). No puedo usar sep_millares si no use sep_decimal

#por defecto, usa "." como separador de decimales y  la "," como separador de millares 
$cantidad_1=number_format($cantidad_1, 2);
echo $cantidad_1. "<br>";

$cantidad_2=number_format($cantidad_2, 0, "", ".");
echo $cantidad_2;