<?php
/*
 CommentController  class  extends class Controller 
and interact with comment Model and views 
*/ 
class CommentController extends Controller{

/*
   addComment Method:  
   Description:add comment for related photo and save in Database .
   @param:int id -ID of specified photo
*/ 
  public function addComment($id){
        if(! isset ($_SESSION['user_id']))
       $this->redirect('/login');
       $Comment = new Comment();
        $Comment->insert();
       $this->redirect('/gallery');
        }   

  

     





}