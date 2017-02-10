<?php
include_once("alumnoCollector.php");

$nombre = $_POST['nombre'];
$parcial = $_POST['parcial'];
$finale = $_POST['finale'];
$mejoramiento = $_POST['mejoramiento'];
$aprobado = 'TRUE';

$alumnoCollectorObj = new alumnoCollector();
?>


<html>
    <head>
        <meta charset="utf-8">
       
    <link href="css/bootstrap.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
        echo "<p>Creado</p>";
        $alumnoCollectorObj->createAlumno($nombre,$parcial,$finale,$mejoramiento,$aprobado);
        ?>
        <a href="read_alumnos.php"><button>VOLVER</button></a>
       
  
    </body>
</html>