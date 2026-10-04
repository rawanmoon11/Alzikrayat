<?php require __DIR__ .'/../layout/headers.php'; ?>
  


 <div class="card mb-3" >
     <img class="card-img-top"  id="details"
      src="/alzikrayat/Public/Images/uploads/<?=htmlspecialchars($photo['file_name'])?>">
      <div class="card-body">
        <p  class="card-text"><small class="text-body-secondary">date time:  
                <?=htmlspecialchars($photo['date_time'])?></small></p>
                  <p  class="card-text"><b>Author:  
                <?=htmlspecialchars($Author)?></b></p>
           <p class="card-text"> <b>Title:  </b><?=htmlspecialchars($photo['title'])?>  </p>    
           <p class="card-text"><b> description:</b> <?=htmlspecialchars($photo['description'])?></p>
            <b> comments:</b>
           <?php if(!empty($comments)):?>
            
                   <?php  foreach($comments as $comment): ?>
                        <p class="card-text">        
          <?=htmlspecialchars($comment['comment'])?>  - 
          <?=htmlspecialchars($comment['date_time'])?> 
          <br>
                 
                 
                   </p>  
             <?php endforeach;?>
      
        <?php else: ?>
            <p> No comments </p>
          <?php endif;?>
</div>
</div>
 
<form  class="container mt-5" method="post" action="/alzikrayat/Public/saveComment/<?=$photo['id']?>">
       
 <div class="row-md-5">
    <label class="form-label"> comment </label>
     <textarea   class="form-control"  name="comment"  id="comm"> </textarea>
</div> 

<div class="col-md-5">
    <button  type="submit"  id="comments" class="btn btn-info  mx-auto"  style="width:250px" >
         Add Comment</button>
       </div> 

</form>
<form  class="container mt-5" method="post" action="/alzikrayat/Public/deleteId/<?=$photo['id']?>">
    <button  type="submit"class="btn btn-danger  mx-auto"  style="width:250px"> delete</button>
</form>

       <script  src="/alzikrayat/Public/js/JsVali.js" ></script>
      <?php require __DIR__.'/../layout/footer.php';?>
