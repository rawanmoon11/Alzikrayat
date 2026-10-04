<?php
/*
 an abstract class Controller 
to interact with ةmodel and view
*/ 
abstract class Controller{
    /* view method: 
     * Description:to open a specified view page  . 
     * @param: String of $view name of page.
     *  @param:(optional)array of data related to desired page .
     *  @return : void
*/
protected function view($view,$data=[]){
 extract($data);
 require_once __DIR__."/../views/$view.php";
}
 
/* redirect method: 
     * Description:to redirect to specified  page  . 
     * @param:  name of page.
     *  @return : void
*/
protected function redirect($url){
    header('Location:'.$url);
    exit;
}




}