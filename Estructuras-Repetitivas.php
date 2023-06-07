<?php

/* while(condicion){
    // Codigo a ejecutar mientras la condicion es verdadera
}

do{
    // Codigo a ejecutar al menos una vez
}while(condicion);


for(inicializacion; condicion; incremneto/decremento){
    //Codigo a ejecutar en cada iteracion
}

//EJEMPLO

$i = 0;

while($i < 10){
    echo $i . "<br>";

    $i++; //Incremento
}


echo "<br>";

// Do While 
$i = 100;

do {
    echo $i . "<br>";

    $i++;
}while($i < 10);


// EJEMPLO FOREACH
$clientes = array('Pedro', 'Juan', ' Karen');

foreach($cliente as $cliente):
    echo $cliente . "<br>";
endforeach;

$cliente = [
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
];

foreach($cliente as $key => $valor ):
    echo $key ."- ". $valor. '<br/>';
endforeach; */


$productos = [
[ 
    'nombre' => 'Tablet',
    'precio' => 200,
    'disponible' => true
],
[
    'nombre' => 'Televison 24',
    'precio' => 400,
    'disponible' => true
],
[
    'nombre' => 'Monitor 27 Curvo',
    'precio' => 400,
    'disponible' => true
]
];

foreach($productos as $producto ){ ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?></p>
        <p>Precio: <?php "$" .  $producto['precio']; ?></p>
        <p><?php echo ($producto['disponible']) ? 'Dsiponible' : 'No Disponible'; ?></p>
    </li>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>