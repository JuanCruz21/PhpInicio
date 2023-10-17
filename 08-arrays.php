<?php include 'includes/header.php';
//Declaración de array 1
$carrito = ["Televisor", "Telefono"];
//Agregar datos desde el indice
$carrito[2] = "Nuevo Iphone";
//Declaración de array 2
$carrito2 = array("Televisor", "Telefono");
//Agregar datos desde el indice
$carrito2[2] = "Nuevo Xiaomi"; 
//Accceder a elementos
echo $carrito[0];
echo "<br>";
echo $carrito2[1];
echo "<br>";

//Agregar datos sin conocer la extencion al inicio
array_unshift($carrito,"Celular");

//Agregar datos sin conocer la extencion al final
array_push($carrito,"Audifonos");

// imprimir un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

echo "<pre>";
var_dump($carrito2);
echo "</pre>";
include 'includes/footer.php';