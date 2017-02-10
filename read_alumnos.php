
<?php
include_once("alumnoCollector.php");
$id;

$alumnoCollectorObj = new alumnoCollector();

?>

<html>
<head>
	<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
          
          
</head>
<body>
    <header>
        
     </header>
    
    
    <h1>TABLA Notas</h1>
   
    <table>
        <tr>    
            <th>NOMBRE</th>
            <th>Parcial</th>
            <th>Final</th>
               <th>Mejoramiento</th>
               <th>Aprobado</th>
        </tr>
        <?php
            foreach ($alumnoCollectorObj->showAlumnos() as $c){
            echo "<tr>";
           
            echo "<td>" . $c->getNombre() . "</td>";            
            echo "<td>" . $c->getParcial() . "</td>";   
            echo "<td>" . $c->getFinal() . "</td>";   
                  echo "<td>" . $c->getMejoramiento() . "</td>"; 
                  echo "<td>" . $c->getAprobado() . "</td>";  
            
            echo "</tr>"; 
                
        }

        ?>

    </table>

   
 
</body>
</html>
