<?php 
declare(strict_types=1);
include 'includes/header.php';
$a = 2;
$b = 4;
// Funciones sin return
Function resta(int $a,int $b){
    echo $a-$b;
}
resta($a,$b);
//Funciones con return
echo "<br>";
function sumar(int $a,int $b){
    return $a+$b;
}
echo sumar(100,200);

include 'includes/footer.php';