<?php

require_once('./clases.php');
$alumno = new Persona('Jose Pabon', 17);

class Persona{
    private $nombre;
    protected $edad;

    public function __construct($nombre, $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }
    private function saludar(){
        echo "Hola, mi nombre es " . $this->nombre;
    }
}
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
        <?php include('../includes/header.php') ?>
    </header>
    <h1>Programacion oreintada a objetos en php</h1>
    <nav>
        <?php include('../includes/enblances.php') ?>
    </nav>
    <main>
        <pre class="resultado">
            <?php echo $alumno->getNombre(); ?>
            <?php echo $alumno->getEdad() ?>
        </pre>
    </main>
</body>
</html>