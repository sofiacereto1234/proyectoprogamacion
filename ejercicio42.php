<?php

$clave="1234";

/* String functions: md5() and sha1() (ya no se usan para encriptar contraseñas) 
echo md5($clave);
echo "<br>";
echo sha1($clave);

echo "<br>";
echo hash("md5", $clave);
echo "<br>";

foreach (hash_algos() as $algortmos) {
    echo $algortmos. "  -  ". hash($algortmos, $clave) . "<br>";
}
*/

echo password_hash($clave, PASSWORD_DEFAULT) . "<br>";/* cada vez que refresco la página me genera un hash distinto*/

echo password_hash($clave, PASSWORD_BCRYPT) . "<br>";/* cada vez que refresco la página me genera un hash distinto*/

/*echo password_hash($clave, PASSWORD_BCRYPT["cost"=>11]) . "<br>";*/

$clave_procesada=password_hash($clave, PASSWORD_BCRYPT) . "<br>";

$clave2="12345";

if (password_verify($clave, $clave_procesada)) {
    echo "Las claves coinciden.<br>";
} else {
    echo "Las claves no coinciden.<br>";
}

if (password_verify($clave2, $clave_procesada)) {
    echo "Las claves coinciden.<br>";
} else {
    echo "Las claves no coinciden.<br>";
}