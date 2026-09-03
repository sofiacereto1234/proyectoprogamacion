<?php
$laptop=["Acer Nitro5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];

$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9,
];

foreach($frutas as $valor){
    echo $valor."<br>";

}
#segundotipo 
echo "<br>";

$laptop=["Acer Nitro5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];

$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9,
];

foreach($laptop as $clave=>$valor){
    echo "Hay ".$valor." ". $clave." en el inventario"."<br>";
    }

echo "<br>";
#
$productos = [
    ["codigo" => "A001", "descripcion" => "mouse"],
    ["codigo" => "A002", "descripcion" => "teclado"],
    ["codigo" => "A003", "descripcion" => "monitor"],
    ["codigo" => "A004", "descripcion" => "impresora"]
];

foreach($productos as $prod){
    echo $prod["codigo"]. " - " .$prod["descripcion"]."<br>";
}