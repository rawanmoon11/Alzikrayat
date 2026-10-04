<?php 
/*
 an abstract class model 
to treate with database and table
*/ 
 abstract class Model{
  protected   $connect ;
  protected $table;
  protected $attribute=[];
  /*__construct 
  to initialize a connection 
  */
  function __construct(){
    $this->connect=Database::connect();
  }
   /*
  find method: 
  Description: to bring a single record from  specified table
  @param: an int number of id
  @return: a single Record   
  */
  public function find($id){
  $stm= $this->connect->prepare("select * from ".$this->table." where id=?");
  $stm->execute([$id]);
  $data=$stm->fetch(PDO::FETCH_ASSOC);
  return $data;
  }
 
/*
  findComment method: 
  Description: to bring a specified comment acording to id of photo
  @return: array of comments related to specified photo   
  */
  public function findComment($id){
  $stm= $this->connect->prepare("select * from ".$this->table." where photo_id=?");
  $stm->execute([$id]);
  $data=$stm->fetchAll(PDO::FETCH_ASSOC);
  return $data;
  }
  /*
  findAll method: 
  Description: to bring all records from  specified table
  @return: array of Records   
  */
 public function findAll(){
  $stm= $this->connect->prepare("select * from ".$this->table);
  $stm->execute();
  $data=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }//endblock


  /*
  setAttributeValue method:
   Description:added key-value to  Attribute array
   @param:string key name of attribute 
   @param: value  of attribue

  */
  public function setAttributeValue($key ,$value,){
   $this->attribute[$key]=$value;

  }


  /*
  insert method:
   Description:to insert new record
  @return:true if insert is Successful if not false
  */
  public function insert(){
    $colunm=implode(',',array_keys($this->attribute));
    $plceholders=":".implode(',:',array_keys($this->attribute));
    $stm=$this->connect->prepare("insert into ".$this->table." ($colunm) values ($plceholders)" );
    return $stm->execute($this->attribute);
  }


   /*
  delete method:
  Description: delete single record from  specified table
  @param: an int number of id
  @return: true if delete is Successful if not false  
  */
 public function delete($id){
  $stm=$this->connect->prepare("delete from ".$this->table." where id=?");
  return $stm->execute([$id]);
 }


 /*
  setAttribute method: 
  Description: to bring a single record from  specified table
  @param: a string  of email
  @return: a single Record   
  */
 public function setAttribute($data){
$this->attribute=$data;
 }

/*
  findEmail method: 
  Description: to bring a single record from  specified table
  @param: a string  of email
  @return: a single Record   
  */
  public function findEmail($email){
  $stm= $this->connect->prepare("select * from ".$this->table." where email=?");
  $stm->execute([$email]);
  $data=$stm->fetch(PDO::FETCH_ASSOC);
  return $data;
  }
 
}