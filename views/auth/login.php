<?php require __DIR__ .'/../layout/headers.php'; ?>



    <?php if(!empty($errors)):?>
   <script> alert(<?= json_encode(implode("\n",$errors))?>);
                window.history.back();
                 </script>

   <?php  endif;?>

   <form method="post"  id="log" class=" mt-5 mx-auto"   action="/alzikrayat/Public/loginsave">

   <div>
      <label> email</label>
    <input id="email" type=email class="form-control" name="email" required > 
</div>

<div>
    <label> password</label>
    <input  id="password" type=password   class="form-control" name="password"required> 
</div>
  
<div >
    <button id="login" type="submit" class="btn btn-primary  d-block mx-auto"  style="width:300px">Login</button>
  </div>
 
  <div>
  <b> Last Login:</b>
  <?php if(isset ($_COOKIE['Last_Login'])):?>
    <?=htmlspecialchars($_COOKIE['Last_Login']);?>
    <?php endif;?>
      
</div>

</form>

 <script  src="/alzikrayat/Public/js/JsVali.js" ></script>
      <?php require __DIR__.'/../layout/footer.php';?>
