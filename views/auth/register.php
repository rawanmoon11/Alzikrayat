<?php require __DIR__ .'/../layout/headers.php'; ?>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
 <script  src="/alzikrayat/Public/js/JsVali.js" ></script>



   <form method="post"  id="reg" class="row g-3 justify-content-center mt-5 "action="/alzikrayat/Public/registerSave">
  
    <div class="col-md-6">
    <label class="form-label"> first name</label>
    <input   class="form-control " id="Fname" name="first_name" id="exampleFormControlInput1" required> 
</div>

   
 <div class="col-md-5">
    <label class="form-label"> last name</label>
    <input class="form-control" id="Lname" name="last_name" required> 
</div>

 <div class="col-md-6">
      <label> email</label>
    <input type=email id="em" class="form-control" name="email" required> 
</div>

<div class="col-md-5">
    <label> password</label>
    <input type=password   id="pass" class="form-control" name="password"required> 
</div>

<div class="col-md-6">
    <label class="form-label"> location </label>
    <input  class="form-control"  name="location"  id="exampleFormControlInput1 "> 
</div>
 

  <div class="col-md-5">
    <label class="form-label" > occupation </label>
    <input   class="form-control"   id="exampleFormControlInput1" name="occupation"> 
    </div>
    
<div class="col-md-6">
    <label class="form-label" > description</label>
    <textarea  class="form-control"  name="description" id="exampleFormControlTextarea1"> </textarea>
</div>

<div class="col-md-5">
</div>  

   <div class="col-md-5">
   <button  class="btn btn-primary" id="register"  style="width:500px;">Register</button>
</div>
</form>
 
<div>
    <?php 
     if(!empty($errors)):
    ?>

     <script> alert(<?= json_encode(implode('/n',$errors))?>);
                window.history.back();
                 </script> 
<?php  endif;
?>
     </div>
     


      <?php require __DIR__.'/../layout/footer.php';?>
