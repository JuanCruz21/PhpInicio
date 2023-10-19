<?php include 'includes/header.php';
$a = 0;
while ($a <= 10) {
    echo $a . "<br>";
    $a +=1;
}

do{
    echo $a . "<br>";
    $a +=1;
    echo $a."<br>";
}while($a <= 10);
// For Loop
for($a=1; $a < 100;$a++){
    if( $a % 3 == 0 && $a % 5 == 0){
        echo "FIZZ BUZZ". "<br>";
    }
    else if($a % 3 === 0)
    echo "FIZZ". "<br>";
    else if($a % 5 === 0){
        echo "BUZZ". "<br>";
    }
}
$variantes = ["Negro","Blanco","Amarillo"];
foreach($variantes as $variante){
    echo $variante . "<br>";

}

$cliente = [
    'Nombre'=>'Juan',
    'Saldo' => 2304,
    'informacion' => [
        'Tipo' => 'Premium',
        'Disponible'=>100
    ]
];
// For each iterando un arreglo
foreach($cliente as $client){
    if(gettype($client)!="array"){
        echo $client . "<br>";
    }
}

foreach($cliente['informacion'] as $info){
    echo $info . "<br>";
}
// For each iterando un arreglo pero con llaves
foreach($cliente as $key => $client){
    if(gettype($client)!="array"){
        echo $key ." = ". $client . "<br>";
    }
}

include 'includes/footer.php';