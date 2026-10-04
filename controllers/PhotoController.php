<?php 
/*
 PhotoController  class  extends class Controller 
and interact with photo Model and views 
*/ 
class PhotoController extends Controller{

/*
 gallery Method:  
   Description: display gallery with all photo
*/ 
 public function gallery(){
     $photo = new Photo();
     $photos =$photo->findAll();
      $this->view('photos/gallery',['photos'=>$photos]);
  }

  /*
   saveComment Method:  
   Description: insert a comment into database after validation .
   @param: int id the ID photo.
*/ 
  public function saveComment($id){
     if(! isset ($_SESSION['user_id'])){
       $this->view('auth/login');
        return;}
    $comment= new Comment();
     $comment->setAttribute($_POST);
     echo "comentt is".$_POST['comment']; 
    $errors=$comment->validateComment();
        if(!empty($errors)){  
       echo " <script> alert(".json_encode(implode("\n",$errors)).");
                window.history.back();
                 </script>";  
                  return; }
     
        else{    
           $comment->setAttributeValue('user_id' ,$_SESSION['user_id']);  
           $comment->setAttributeValue('photo_id',$id);
           $comment->insert();
    echo " <script> alert('Saved Successfully ');
                window.history.back();
                 </script>";
        }
  }

  /*
   viewDetails Method:  
   Description: display a Details of specified  .photo.
   @param: int id the ID photo.
*/ 
 public function viewDetails($id){
     $photo = new Photo();
     $detailedphoto =$photo->find($id);
     $comment= new Comment();
     $comments=$comment->findComment($id);
     $user=new User();
     $author=$user->find( $detailedphoto['user_id']);
      $this->view('photos/details',['photo'=>$detailedphoto ,
      'comments'=>$comments,'Author'=> $author['first_name']." ".$author['last_name']]);
 }

/*
   upload Method:  
   Description:to check wthere user is registerd or not to uplod photo .
*/ 
   public function upload(){
     if(! isset ($_SESSION['user_id'])){
      echo " <script> alert('please Login to upload photo');
                window.history.back();
                 </script>"; 
              return;       }

       $this->view('photos/upload');
      }
  


/*
   store Method:  
   Description:to save photo in Database.
*/ 
      public function store(){
     
        $photo = new Photo();
      if(! isset ($_SESSION['user_id'])){
       $this->redirect('/login');
        return;}
       
         $photo->setAttribute($_POST);
       $error=$photo->validatePhotoMetadata();
         if(!empty($error)){
           echo " <script> alert('please wrtie a title');
                window.history.back();
                 </script>";  return;
     }
     else{ 
        if(! isset($_FILES['photo_file']) 
            || $_FILES['photo_file']['error'] !==UPLOAD_ERR_OK
            ){
            $this->view('photos/upload',['errors'=>["choose a corect photo"]]);
            return;}
            $ext=pathinfo($_FILES['photo_file']['name'],PATHINFO_EXTENSION);
            $filename='photo_'.uniqid().'.'.$ext;
            $photo->setAttributeValue('file_name',$filename);

              $distenation=__DIR__ .'/../Public/Images/uploads/'. $filename;
             if (!move_uploaded_file(
              $_FILES['photo_file']['tmp_name'],$distenation)){
                $this->view('photos/upload',['errors'=>["Not Save"]]);
            return;

              }
        $photo->setAttributeValue('user_id' ,$_SESSION['user_id']);
         if($photo->insert()){  
             $this->redirect('/alzikrayat/Public/photos/gallery');
             }
         else 
            echo " <script> alert('process Failed');
                window.history.back();
                 </script>"; }
      }


 /*
   deleteId Method:  
   Description:delete a specified  photo.
   @param: int id the ID photo. 
*/ 

 public function deleteId($id){
         $photo = new Photo();
         $detailedphoto =$photo->find($id);
         if(!empty($_SESSION['user_id'] )){
         if($_SESSION['user_id'] ==$detailedphoto['user_id'] ){
        $photo->delete($id);
    
             $this->redirect('/alzikrayat/Public/photos/gallery');
       }
        else{
             echo "<script> alert('Not allowed ! just Author can Delete ');
                window.history.back();
                 </script>";}
         }
         else{
           echo "<script> alert('Not allowed');
                window.history.back();
                 </script>";  }
        
         }
                              
        }



