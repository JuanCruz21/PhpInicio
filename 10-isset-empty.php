<?php include 'includes/header.php';
$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro','Juan','Cruz');
// Identificar si un arreglo esta vacio. 
var_dump( empty($clientes));
var_dump( empty($clientes2));
var_dump( empty($clientes3));
// Define si una propiedad o arreglo esta definido o crado
echo "<br>";
var_dump( isset($clientes));
var_dump( isset($clientes2));
var_dump( isset($clientes3));
var_dump( isset($clientes4));
// Define si una propiedad existe en un arreglo
$cliente = [
    'Nombre'=>'Juan',
    'Saldo' => 2304,
    'informacion' => [
        'Tipo' => 'Premium',
        'Disponible'=>100
    ]
];
echo "<br>";
var_dump(isset($cliente['Codigo']));
var_dump(isset($cliente['Saldo']));
include 'includes/footer.php';