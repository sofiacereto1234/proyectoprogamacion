<?php 
 
/*var_dump($_POST['asignatura']);*/


$materias=$_POST['asignatura'];
foreach($materias as $asignatura){
    echo $asignatura . "<br>";
}

/*foreach($_POST['asignatura'] as $asignatura){
    echo $asignatura . "<br>";
}*/

echo "<br>";
echo "<br>";
echo "<br>";

$pera=$_POST['frutas'];
foreach($pera as $fruta){
    echo $fruta . "<br>";
}