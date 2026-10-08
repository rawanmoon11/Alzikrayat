<!doctype html>
<html lang=en>
    <head>
      
        <meta charset="UTF-8">
        <meta  name="viewport" content="width=device-width ,initial-scale=1.0">
        <title> alzikrayat </title>

       <link href="/alzikrayat/Public/css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        
</head>
<body class="d-flex flex-column min-vh-100" >
    <header> </header>
    <nav >
        <ul class="nav">
        
             
                <?php if(isset ($_SESSION['user_id'])):?>
              <li class="nav-item" ><p class="nav-link"  style="color:black;"><i> Hi <?=htmlspecialchars($_SESSION['name'])?></i></p></li>
                 <li class="nav-item" ></li>

                 <li class="nav-item" ><a class="nav-link"  href="/alzikrayat/Public/photos/gallery"> Gallery</a></li>
                 <li class="nav-item" ><a class="nav-link"  href="/alzikrayat/Public/logout"> Logout</a></li>
                

                   <?php else:?>
                     <li class="nav-item" > <a class="nav-link" href="/alzikrayat/Public/login"> Login</a></li>
                     <li class="nav-item"><a class="nav-link"  href="/alzikrayat/Public/register"> Register</a></li>
                    <li class="nav-item" ><a class="nav-link"  href="/alzikrayat/Public/photos/gallery"> Gallery</a></li>
                     <li class="nav-item" ><a class="nav-link" style="color:black;">Please Login..</a></li>

<?php endif;?>
</ul>
</nav>
<main class="flex-grow-1">
                 
