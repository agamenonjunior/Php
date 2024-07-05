<?php

class Upload{
/**
 *  Classe Upload 
 */

 private $id;
 private $documento;
 

 public function arquivo($documento){
    
 }

 public function midia($documento){
    
 }




 /**
  * Get the value of id
  */
 public function getId()
 {
  return $this->id;
 }

 /**
  * Set the value of id
  */
 public function setId($id): self
 {
  $this->id = $id;

  return $this;
 }

 /**
  * Get the value of documento
  */
 public function getDocumento()
 {
  return $this->documento;
 }

 /**
  * Set the value of documento
  */
 public function setDocumento($documento): self
 {
  $this->documento = $documento;

  return $this;
 }
}

?>