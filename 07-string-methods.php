<?php include 'includes/header.php';
// Conocer extension de un string
$nombreCliente = " Juan Pablo";
echo strlen($nombreCliente);
echo "<br>";
//Eliminar espacio en blanco
$texto = "Hola Mundo";
echo trim($texto);
echo "<br>";
//Convertir a mayusculas
echo strtoupper($nombreCliente);
echo "<br>";
//Convertit a minusculas
echo strtolower($nombreCliente);
echo "<br>";
// Convertir o remplazar una cadena de texto
echo str_replace('Juan', 'J', $nombreCliente);
echo "<br>";
// Revisar si un string existe y cuantos espacios hay.
echo strpos($nombreCliente, 'Juan');
echo "<br>";
// Concatenación de strings
echo "El nombre del cliente es " . $nombreCliente;
echo "<br>";
echo "El nombre del cliente es ${nombreCliente} ";
echo "<br>";
//Arreglos indexados
include 'includes/footer.php';