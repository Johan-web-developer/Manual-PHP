<?php
$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponibles' => true
    ],
    [
        'nombre' => 'Mobile',
        'precio' => 300,
        'disponibles' => true
    ],
    [
        'nombre' => 'Desktop',
        'precio' => 400,
        'disponibles' => true
    ],   
];
    $json = '{"nombre":"Jose Pabon","edad":16,"ciudad":"Nueva York"}';

    $data = json_decode($json);// Retorno del objeto php
    $dataAsocc = json_decode($json, true);//Retirni de un arreglo asociativo
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include('includes/header.php') ?> 
    </header>
    <h1>Uso de JOSN Example</h1>
    <nav>
        <?php include('include/enlances.php') ?>
    </nav>
    <main>
        <pre class="resultado">
            <?php 
                var_dump($productos);
                $json = json_encode($productos, JSON_UNESCAPED_UNICODE);
            ?>
            <br>
            <?php 
            var_dump($json);
            ?>
        </pre>
        <table class="contenido">
            <thead>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Ciudad</th>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $dataAsocc['nombre']; ?></td>
                    <td><?php echo $dataAsocc['edad']; ?></td>
                    <td><?php echo $dataAsocc['ciudad'];?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>