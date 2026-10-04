<?php
/*
 Comment  class  extends class Model 
and interact with Database
*/  

class Comment extends Model{
protected $table='comments';


/*
  validateComment  method: 
  Description: to validate a comment before inser into database.
  @return: array of errors.
  */
public function validateComment(){
$errors=[];
if(empty(trim($this->attribute['comment']))) 
    $errors[]=' please write a comment ';
return  $errors;
}


  

}
