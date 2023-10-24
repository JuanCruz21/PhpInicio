<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'tablet',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Celular',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 200,
        'disponible' => false
    ],
];
echo "<pre>";
 var_dump($productos);
echo "</pre>";
$json = json_encode($productos,JSON_UNESCAPED_UNICODE);
var_dump($json);
include 'includes/footer.php';