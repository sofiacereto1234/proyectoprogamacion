<?php

/*$numero=NULL;
if(is_null){
    echo "es nulo";
}else{
    echo "no es nulo";
}

echo "<br>";

$numero="4";

unset($numero);
if(is_null($numero)){
    echo "es nulo";
}else{
    echo "no es nulo";
}*/

echo "<br>";

$numero="4";

if(is_null($numero)){
    echo "es nulo";
}else{
    echo "no es nulo";
}

$numero="0";

if(empty($numero)){
    echo "esta vacio";
}else{
    echo "no esta vacio";
}

echo "<br>";

$numero=" ";

if(empty($numero)){
    echo "esta vacio";
}else{
    echo "no esta vacio";
}

echo "<br>";

$numero=$_GET['numero'];

if(empty($numero)){
    echo "esta vacio";
}else{
    echo "no esta vacio";
}

echo "<br>";

$numero=$_GET['numero'];

if(isset($numero)){
    echo "esta definido";
}else{
    echo "no esta definido";
}

echo "<br>";

$numero="7";
unset($numero);
if(isset($numero)){
    echo "esta definido";
}else{
    echo "no esta definido";
}