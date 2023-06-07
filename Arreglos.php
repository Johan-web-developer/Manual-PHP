<?php

/* $minArreglo = array("valor1", "valor2", "valor3");


$carrito = ['Tablet','Television','Computadora'];

echo "<pre>";
var_dump($carrito);
echo "</pre>";


echo $carrito[1];



$carrito[3] = 'Nuevo Producto...';


array_push($carrito, 'Mouse');


array_unshift($carrito, 'Reloj');


echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];


$miArrayAsociativo = array (
    "clave1" => "valor1",
    "clave2" => "valor2",
    "clave3" => "valor3",
);



echo $miArrayAsociativo["clave1"]; // Imprime "valor1"
echo $miArrayAsociativo["clave2"]; // Imprime "valor2"
echo $miArrayAsociativo["clave3"]; // Imprime "valor3"


foreach ($miArrayAsociativo as $clave => $valor){
    echo "Clave:" . $clave . ", valor:" . $valor;
} */

$cliente = [
    'nombre' => 'Johan',
    'saldo' => 200,
    'informacion' =>[
        'tipo' => 'Premier',
        'Stock' => 100
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);

// echo $cliente ['nombre'];
// echo $cliente ['informacion']['disponible'];

$cliente['codigo'] = 2123143242;

echo "<pre>";
var_dump($cliente);
echo "<pre>";

asort($cliente); // Ordena por valores (orden alfabetico)
arsort($cliente); // Ordena por valores (Z Primero)
ksort($cliente); // Ordena por llaves (orden Alfabetico)
krsort($cliente); // Ordena por llaves (orden alfabetico DE LA Z-A);


echo "<pre>";
var_dump($cliente);
echo "<pre>";
?>