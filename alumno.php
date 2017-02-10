<?php

class alumno
{

    private $nombre;
    private $parcial;
    private $finale;
    private $mejoramiento;
      private $aprobado;
     function __construct( $nombre , $parcial, $finale, $mejoramiento , $aprobado ) {
    
       $this->nombre = $nombre;
        $this->parcial = $parcial;
         $this->finale = $finale;
         $this->mejoramiento = $mejoramiento;
           $this->aprobado = $aprobado;
     }
    
     
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
function setParcial($parcial){
       $this->parcial = $aparcial;
     } 
     function getParcial(){
       return $this->parcial;
     } 
    
    function setFinal($finale){
       $this->finale = $finale;
     } 
     function getFinal(){
       return $this->finale;
     } 
  function setMejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getMejoramiento(){
       return $this->mejoramiento;
     } 
    
         
  function setAprobado($aprobado){
       $this->aprobado = $aprobado;
     } 

     function getAprobado(){
       return $this->aprobado;
     } 
    
 } 
    

?> 