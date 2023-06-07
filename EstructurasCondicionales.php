<?php

if(10 > 3){
    //Instrucciones
}

if (10 > 3){
    //Instrucciones
}else if (10 <20){
    //Instrucciones
}else {
    //Instrucciones
}

if (10 > 3){
    //Instrucciones
}else{
    //Instrucciones
}


$autenticado = true;
$admin = false;

if($autenticado && $admin){
    echo "Usuario autenticado correctamente";
}else{
    echo "Usuario no autenticado, inicia sesion";
} 

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'regular'
    ]
];

echo "<br>";

if (!empty($cliente)) {
    echo "El Arreglo de cliente no esta vacio";
    if($cliente['saldo'] > 0){
        echo "El cliente tiene saldo disponible";
    }else{
        echo "No hay saldo";
    }
}

echo "<br>";

if($cliente['saldo'] > 0){
    echo "El cliente tiene saldo disponible";
}else if($cliente['informacion']['tipo'] === 'premium'){
    echo "El Cliente es Premium";
}else {
    echo "No hay cliente definido o no tiene saldo disponible o no es premium";
}

// Switch }

echo "<br>";

$tecnologia = 'HTML';

switch ($tecnologia){
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'JavaScript':
        echo "JavaScript, un excelente lenguaje!";
        break;
    case 'HTML':
        echo "NO ES UN  LENGUAJE!!";
        break;
        default:
        echo "Algún lenguaje que no se cual es";
        break;    	    
}

?>