<?php
#ejemplo1
function saludo($nombre){
return "Hola, mi nombre es: $nombre";
}

echo saludo("Lucia");


$usuario="Amanda";
echo saludo($usuario);

echo saludo($nombre="Carlos");

#ejemplo2

function promedio_almumno($nota1, $nota2, $nota3){
    $promedio=($nota1+$nota2+$nota3)/3;

return $promedio;
}
echo "<br>";
echo"El promedio es: ". promedio_almumno(7,9,7);
echo "<br>";
echo"El promedio es: ". promedio_almumno(5,8,6);
echo "<br>";
echo"El promedio es: ". promedio_almumno(7,9,9);
echo "<br>";
echo"El promedio es: ". promedio_almumno(7,8,6);
echo "<br>";
echo"El promedio es: ". promedio_almumno(10,4,6);
