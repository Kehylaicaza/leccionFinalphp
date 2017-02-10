<?php

include_once('alumno.php');
include_once("collector.php");

class alumnoCollector extends collector
{
  
  function showAlumnos() {
    $rows = self::$db->getRows("SELECT * FROM nota ");        

    $arrayNota= array();        
    foreach ($rows as $c){
      $aux = new alumno($c{'nombre'},$c{'parcial'},$c{'final'},$c{'mejoramiento'},$c{'aprobado'});
      array_push($arrayNota, $aux);
    }
    return $arrayNota;        
  }
    

    function createAlumno($nombre, $parcial, $finale, $mejoramiento, $aprobado) {
        $rows = self::$db->insertRow("INSERT INTO nota (nombre, parcial, final, mejoramiento, aprobado) VALUES ('$nombre', '$parcial', '$finale', '$mejoramiento', '$aprobado' )",null);
        
    }
    
 
}
?>

