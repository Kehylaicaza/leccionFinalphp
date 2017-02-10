<?php
include_once("alumnoCollector.php");

$nombre = $_POST['nombre'];
$parcial = $_POST['parcial'];
$final = $_POST['final'];
$mejoramiento = $_POST['mejoramiento'];
$aprobado = $_POST['aprobado'];

$alumnoCollectorObj = new alumnoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       
    <link href="css/bootstrap.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
        echo "<p>Creado</p>";
        $alumnoCollectorObj->createMina($nombre,$id_empresa,$ubicacion);
        ?>
        <a href="read_alumno.php"><button>VOLVER</button></a>
       
  
    </body>
</html>