<?php 
/*
 AuthController  class  extends class Controller 
and interact with user Model and views 
*/ 
class AuthController extends Controller{


/*
 homePage Method:  
   Description: display home Page.
*/ 
 public function homePage(){
      $this->view('photos/home');
  }


/*
 register Method:  
   Description: display register form
*/ 
  public function register(){
   $this->view('auth/register');
  }

  /*
 login Method:  
   Description: display login form
*/ 
 public function login(){
   $this->view('auth/login');
  }

   /*
 logout Method:  
   Description: logout ,destroy session  and display home page
*/ 
   public function logout(){
    session_destroy();
  $this->view('photos/home');
  }
 
 /*
 registerSave Method:  
   Description:Validation and save data of register.
*/ 
  public function registerSave(){
     $user=new User();
     $user->setAttribute($_POST);
     $error=$user->registerValidation();
     if(!empty($error)){
        $this->view('auth/register',['errors'=>$error]);
        return;
      }
        $user->passwordHash();
        if($user->insert()){
            $this->view('auth/login');

     } }




/*
 loginsave Method:  
   Description:Validation and save data of login.
*/ 
    public function loginsave(){
     $user=new User();
     $user->setAttribute($_POST);
     
    $data=$user->findEmail($_POST['email']);
     $error=$user->loginValidation();
     
     if(!empty($error)){
      $this->view('auth/login',['errors'=>$error]);
      return;
      }

    if(!empty($data)){  
        if( $user->verifyPassword($_POST['password'],$data['password'])){
         $user->setAttribute($data);
         $_SESSION['name']=$user->getName();
         $_SESSION['user_id']=$user->getUserId();
         $time=date('y-m-d H:I:s');
         setcookie("Last_Login",$time,time()+(60*60*24*7),"/");
         $this->redirect('/alzikrayat/Public/photos/gallery');}
    else  {      
         echo " <script> alert('Invalid password');
                window.history.back();
                 </script>";  }
}
     
else {
        echo " <script> alert('please enter info again');
                window.history.back();
                 </script>";}
}
}
