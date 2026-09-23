
<?php
/*
 class Database:
 to Create connection to Database   BY Singelton pattern 
*/
class Database{
  private  static $connection=null;
  /*
    connect method:
    Description: to create a connection to database and applied singleton pattern 
    @return: a new connection or the existing shared connection  
    @throws: throws PDOException into Catch and stop program and print error message
  */
  public  static  function connect(){
   if(self::$connection === null){
      try{
       $data="mysql:host=localhost;dbname=alzikrayat;charset=utf8mb4";
       self::$connection=new PDO($data ,'root','');
        self::$connection->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
          
      }
     catch(PDOException $e){

      die("connection failed : ".$e->getMessage());
     }

   }//if
    return  self::$connection;
  }//method


}


















