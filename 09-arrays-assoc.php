<?php include 'includes/header.php';
//Declaración de Array asociativo
$cliente = [
    'Nombre'=>'Juan',
    'Saldo' => 2304,
    'informacion' => [
        'Tipo' => 'Premium',
        'Disponible'=>100
    ]
];

//Seleccionar datos especificos de un array
echo $cliente['informacion']['Tipo'];
echo "<br>";
echo $cliente['informacion']['Disponible'];
echo "<br>";
// Agregar campos en el array
$cliente['Codigo'] = 1244;
//impresion del array
echo "<Pre>";
    var_dump($cliente);
echo "</Pre>";
include 'includes/footer.php';