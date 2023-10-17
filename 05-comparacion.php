<?php include 'includes/header.php';
$numero1 = 20;
$numero2 = 34;
$numero3 = 31;
$numero4 = "20";
var_dump($numero2 > $numero1);
echo "<br>";
var_dump($numero1 < $numero2);
echo "<br>";
var_dump($numero1 >= $numero2);
echo "<br>";
var_dump($numero1 <= $numero2);
echo "<br>";
var_dump($numero1 == $numero2); // Evalua que sean iguales independientemente del tipo de dato
echo "<br>";
var_dump($numero1 === $numero2); // Evalua que sean iguales y el tipo de dato
echo "<br>";
//imprime -1 si es menor, 0 si es igual y 1 si es mayor
var_dump($numero1 <=> $numero2); 

include 'includes/footer.php';