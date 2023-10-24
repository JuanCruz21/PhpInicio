<?php include 'includes/header.php';
//include o require es igual
//require sirve para que no se ejecute si falla se usa
require '19-funciones.php';
Hola();
require_once '20-funciones.php';
echo "<br>";
Hola2();
include 'includes/footer.php';