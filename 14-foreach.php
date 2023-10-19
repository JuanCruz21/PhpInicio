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
//Listar productos
foreach($productos as $producto){ ?>
<ul>
    <li>
        <p>producto: <?php echo $producto['nombre'] . "<br>";?></p>
    </li>
    <li>
        <p>Precio: <?php echo $producto['precio'] . "<br>";?></p>
    </li>
    <li>
        <p> <?php echo ($producto['disponible']) ? "Disponible" : "No disponible"; ?></p>
    </li>
    </ul>
    <?php
}
include 'includes/footer.php';