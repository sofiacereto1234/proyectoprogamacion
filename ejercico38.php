<?php 

#funciones matematicas predefinidas

#sirve para que un numero(5) sea elevado a un exponente(3)
echo pow(5,3). "<br>";

#sirve para calcular la raiz cuadrada de un numero(9)
echo sqrt(9). "<br>";

#sirve para calcular un numero aleatoriamente desde un minimo(1) a un maximo(100)
echo rand(1, 100). "<br>";

#sirve para tener el numero de pi
echo pi(). "<br>";

#sirven para redonder numeros, se pueden poner numeros negativos
#Floor: redondea para abajo
echo floor(4.3). "<br>";
#ceil: redondea hacia arriba
echo ceil(4.3). "<br>";
#round: redondea un float a entero(1-4: para abajo, 5-9 para arriba)
echo round(7.3). "<br>";
echo round(1.955, 2). "<br>";