<?php

declare(strict_types=1);
// include 'includes/header.php';
function usuarioAuntenticado(bool $autenticado) : ?string {
    if($autenticado) {
        return "El usuario esta autenticado.";
    }else {
        return null;
    }
}
$usuario = usuarioAuntenticado(false);
echo $usuario;
// include 'includes/footer.php';

?>