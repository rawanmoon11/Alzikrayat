<?php
/*
 Photo  class  extends class Model 
and interact with Database
*/  
class Photo extends Model{
protected $table='photos';

/*
  validatePhotoMetadata  method: 
  Description: to validate a Photo Metadata before inser into database.
  @return: array of errors.
  */
public function validatePhotoMetadata(){
$errors=[];
if(empty($this->attribute['title'])){
     $errors='title is required';}
      return  $errors;
}


}