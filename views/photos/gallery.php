
<?php require __DIR__.'/../layout/headers.php';?>
<div class="container mt-5">
 <div class="row g-4" >

 
      
         <a href="/alzikrayat/Public/upload"><b>Upload </b></a> 

    <?php if(!empty($photos)):?>
    <?php  foreach($photos as $photo): ?>
       
        <div  class="col-12  col-md-6 col-lg-4"> 
            <div class="card">
            <img   class="card-img"   src="/alzikrayat/Public/Images/uploads/<?=htmlspecialchars($photo['file_name'])?>">
            <div class="card-body text-center">

                            <a href="/alzikrayat/Public/photo/<?=$photo['id']?>">  View details</a>

        </div>
    </div>
        </div>
        <?php endforeach;?>
      
        <?php else: ?>
            <p> NO photo </p>
          <?php endif;?>
          </div>
</div>


  
      <?php require __DIR__.'/../layout/footer.php';?>
