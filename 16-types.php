<?php 
include 'includes/header.php';
function UsuarioAutenticado() :string|int {
    $usuario = false;
    if($usuario){
        return "Usuario Autenticado";
    }
    else 
    {
        return 3;
    }
}
$usuario = UsuarioAutenticado();
echo $usuario;
//Funciones con parametros
Function resta(int $a,int $b){
    echo $a-$b;
}
resta(b:20,a:30);
include 'includes/footer.php';