<?php require __DIR__ .'/../layout/headers.php'; ?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
 <script  src="/alzikrayat/Public/js/JsVali.js" ></script>




   <form   id="up" class="row g-3 justify-content-center mt-5 " method="post" action="/alzikrayat/Public/store" enctype="multipart/form-data">
   
   <div class="col-md-5">
    <label class="form-label"> choose file</label>
    <input   class="form-control" type=file  name="photo_file" required> 
</div>

<div class="col-md-5">
     <label class="form-label" > title</label>
    <input  class="form-control"  id="title"  name="title" required> 
    </div>

    <div class="col-md-5">
     <label class="form-label" > description</label>
    <textarea   class="form-control"  id="description" name="description"> </textarea><br>

</div>
<div class="col-md-5">
</div>  

        <div class="col-md-5">
    <button  class="btn btn-primary"  id="upload" style="width:500px;" >Add</button>
</div>
   
</form>


