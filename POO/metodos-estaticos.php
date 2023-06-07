<?php

    include_once '../POO/clases.php';
    $alumno = new Persona('Jose Pardo', 23);

    class Persona {
        private string $nombre;
        protected int $edad;
        private static $nombreAux;
        public function __construct($nombre,$edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
            self::$nombreAux = $nombre;
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
        public static function saludar(){
            return '<br>Hola como estas' . self::$nombreAux;
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
    <h1>Programacion orientada a objetos en php</h1>
    <nav>
        <?php include('../includes/enlaces.php') ?>
    </nav>
    <main>
        <pre class="resultado">
            <?php 
                echo $alumno->getNombre();
                echo $alumno->getEdad();
                echo Persona::saludar();
            ?>
        </pre>
    </main>
</body>
</html>