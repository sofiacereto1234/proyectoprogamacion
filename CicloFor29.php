<?php

$i=1;


for($i=1; $i<=20; $i++){
    echo $i . "<br>";
}

for($i=20; $i<=1; $i--){
    echo $i . "<br>";
}

$t=7;
for($i=1; $i<=12; $i++){
    echo $i*$t . "<br>";
}

for($i=1; $i<=12; $i++){
    echo $t." x " . $i." = " . $i*$t . "<br>";
}

for($i=12; $i<=1; $i--){
    echo $t." x " . $i." = " . $i*$t . "<br>";
}
