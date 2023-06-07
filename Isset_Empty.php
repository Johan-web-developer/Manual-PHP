<?php
/* $miVariable = "Hola";
if (isset($miVariable)) {
    echo "La variable esta definida y tiene un valor";
}else{
    echo "La variable no esta definidao no tiene un valor";
}


$mivariable2 = "";

if (empty($miVariable2)) {
    echo "La variable esta vacia o no esta definida";
}else{
    echo "La variable tiene un valor";
}


$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Pedro',
    'saldo' => 200,
];



var_dump( empty($clientes) );
var_dump( empty($clientes3) );
var_dump( empty($clientes2) );
echo "<br>";
var_dump( isset($clientes4) );
var_dump( isset($clientes) );
var_dump( isset($clientes2) );
var_dump( isset($clientes3) );


var_dump ( isset($cliente['nombre']));
var_dump ( isset($cliente['codigo']));
 */

$numeros = array(1,4,8,6,3,2);
sort($numeros); // De menor a mayor
rsort($numeros); // De mayo a menor


echo "<pre>";
var_dump ($numeros);
echo "<pre>";

$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);


echo "<pre>";
var_dump ($cliente);
echo "<pre>";

?>