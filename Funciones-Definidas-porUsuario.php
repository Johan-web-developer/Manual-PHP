<?php

// declare(strict_types=1);
// function sumar (int $numero1 = 0, array $numero2):void{
//     echo $numero1 + $numero2;
// }
// sumar (10, []);



/* declare(strict_types=1);
function sumar(int $numero1 = 0, array $numero2 ) {
    echo "$numero1 + $numero2";
}
sumar (10, []);
?> */


declare(strict_types=1);
//include 'includes/header.php';
function usuarioAutenticado(bool $autenticado) : ?string {
    if($autenticado){
        return "El usuario esta autenticado";
    }else{
        return null;
    }
}
$usuario = usuarioAutenticado(false);
echo $usuario;
//include 'includes/footer.php';
?>