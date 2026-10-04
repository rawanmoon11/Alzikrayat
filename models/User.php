<?php
/*
 User  class  extends class Model 
and interact with Database
*/  
class User extends Model{
protected $table='users';


/*
  registerValidation  method: 
  Description: to validate a register data  before inser into database.
  @return: array of errors.
  */
public function registerValidation(){
$errors=[];
if(empty($this->attribute['first_name'])) 
    $errors[]='Name is required';
   elseif(strlen($this->attribute['first_name'])>50 || strlen($this->attribute['last_name'])>50)
   $errors[]=' please reduce letters';
    elseif(!preg_match('/^[a-zA-Z]+$/',$this->attribute['first_name'])||!preg_match('/^[a-zA-Z]+$/',$this->attribute['last_name']))
   $errors[]='Please enters letters';

if(empty($this->attribute['last_name'])){
     $errors[]='last name is required';}

if(empty($this->attribute['email'])){
     $errors[]='Email is required';}

elseif(!filter_var($this->attribute['email'],FILTER_VALIDATE_EMAIL)){
        $errors[]='invalid format email';
     }
if(empty($this->attribute['password'])) $errors[]='password is required'; 
return  $errors;
}



/*
  loginValidation  method: 
  Description: to validate login data before inser into database.
  @return: array of errors.
  */
public function loginValidation(){
$errors=[];
if(empty($this->attribute['email'])){
     $errors[]='Email is required';}
     elseif(!filter_var($this->attribute['email'],FILTER_VALIDATE_EMAIL)){
        $errors[]='invalid format email';
     }
if(empty($this->attribute['password'])){ $errors[]='password is required';}
return  $errors;
}

/*
  getUserId  method: 
  Description: to get a specifed user id .
  @return: int id of user 
  */
 public function getUserId(){
 return$this->attribute['id'];
 }

/*
  getName  method: 
  Description: to get a specifed user name
  @return: string name of user 
  */
 public function getName(){
 return$this->attribute['first_name'].$this->attribute['last_name'];
 }

 
/*
  verifyPassword  method: 
  Description: to validate  enterd password againest   hashed password  stored in database.
  @return: true if they match otherwise false.
  */
 public function verifyPassword($password ,$passwordInDb){
    return password_verify($password,$passwordInDb);
      
 }

  /* passwordHash  method: 
  Description: store  hashed password  in database.
  @return: true if they match otherwise false.
  */
  
 public function passwordHash(){
    $this->attribute['password']=password_hash($this->attribute['password'],PASSWORD_DEFAULT);}


}