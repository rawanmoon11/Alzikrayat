
<?php require __DIR__.'/../layout/headers.php';?>
<div class="dropdown">
<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
   display Options</a>
   <ul class="dropdown-menu">
    <li><button id="col_1" class="dropdown-item" type='button'> 1 column</button></li>
     <li><button id="col_2"  class="dropdown-item" type='button'> 2 columns</button></li>
    <li> <button id="col_3"   class="dropdown-item" type='button'> 3 columns</button></li>
     <li><button id="col_4"  class="dropdown-item" type='button'> 4 columns</button></li>
</ul>
</div>


<div class="container mt-5">
 <div class="row g-4" >

 
      
         <a href="/alzikrayat/Public/upload"><b>Upload </b></a> 

    <?php if(!empty($photos)):?>
    <?php  foreach($photos as $photo): ?>
       
        <div  class="col-12  col-md-6 col-lg-4 change_galley"> 
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

<script>
     let but4=document.getElementById("col_4");
   but4.addEventListener('click',function(){
         document.querySelectorAll(".change_galley").forEach(function(card){
         card.classList.remove("col-lg-4");
        card.classList.remove("col-lg-6");
         card.classList.remove("col-lg-12");
        card.classList.add("col-lg-3");

         })
    });
      let but3=document.getElementById("col_3");
   but3.addEventListener('click',function(){
         document.querySelectorAll(".change_galley").forEach(function(card){
         card.classList.remove("col-lg-3");
         card.classList.remove("col-lg-6");
         card.classList.remove("col-lg-12");
         card.classList.add("col-lg-4");
         })
    });
    let but2=document.getElementById("col_2");
    but2.addEventListener('click',function(){
        document.querySelectorAll(".change_galley").forEach(function(card){
      card.classList.remove("col-lg-12");
        card.classList.remove("col-lg-4");
         card.classList.remove("col-lg-3");
        card.classList.add("col-lg-6");
        })
    });

let but1=document.getElementById("col_1");
    but1.addEventListener('click',function(){
        document.querySelectorAll(".change_galley").forEach(function(card){
        card.classList.remove("col-lg-4");
         card.classList.remove("col-lg-3");
        card.classList.remove("col-lg-6");
        card.classList.add("col-lg-12");

})
        });

    </script>
  
      <?php require __DIR__.'/../layout/footer.php';?>
