<?php include 'includes/header.php';
$autenticado = true;
$admin = true;
//if con operadores
if($autenticado && $admin){
    echo "Usuario autenticado";
} else {
    echo "Usuario no autenticado";
}

$cliente = [
    'Nombre'=>'Juan',
    'Saldo' => 2304,
    'informacion' => [
        'Tipo' => 'Premium',
        'Disponible'=>100
    ]
];
//if Anidados
if (empty($cliente)){
    echo "Echo el arreglo esta vacio";
}else{
    echo "El arreglo no esta vacio";
    if($autenticado && $admin){
        echo "Usuario autenticado";
    } else {
        echo "Usuario no autenticado";
    }
}
// realizando en un if comparaciones y concatenaciones
if($cliente['Saldo'] > 0){
    echo "Cliente tiene saldo $". $cliente['Saldo'];
}else
{
    echo "Cliente no tiene saldo";
}

$caso = 5;

switch($caso){
    case 1:
        echo "Entro 1";
        break;
    case 2:
        echo "Entro 2";
        break;
    case 3:
        echo "Entro 3";
        break;
    default:
        echo "Salio";
        break;
}

include 'includes/footer.php';