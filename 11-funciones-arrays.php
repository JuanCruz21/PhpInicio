<?php include 'includes/header.php';
$cliente = [
    'Estado' => 'A',
    'Nombre'=>'Juan',
    'Saldo' => 2304,
];
$carrito = ['Tablet','Computadora','Television'];
// Buscar elementos en un arreglo
var_dump( in_array('Tablet', $carrito));
var_dump( in_array('Audifonos', $carrito));
echo "<br>";
//Ordenar elementos en un arreglo
$numeros = array(1,2,35,65,430);
echo "<br>";
echo "De menor a mayor ";
sort($numeros); // de menor a mayor
echo "<Pre>";
    var_dump($numeros);
echo "</Pre>";
echo "De mayor a menor";
rsort($numeros); // de mayor a menor
echo "<Pre>";
    var_dump($numeros);
echo "</Pre>";
// Ordenar segun el tipo
 // Ordena por orden alfabetico en base a los valores
asort($cliente);
echo "<Pre>";
    var_dump($cliente);
echo "</Pre>";
// Ordena por orden alfabetico en base a las llaves
ksort($cliente); 
echo "<Pre>";
    var_dump($cliente);
echo "</Pre>";
// Ordena por orden alfabetico en base a las llaves pero de manera inversa
krsort($cliente); echo "<Pre>";
    var_dump($cliente);
echo "</Pre>";
include 'includes/footer.php';